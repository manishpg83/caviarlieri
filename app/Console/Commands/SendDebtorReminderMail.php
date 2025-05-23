<?php

 namespace App\Console\Commands;

 use Illuminate\Console\Command;
 use App\Models\OrderInvoice;
 use Carbon\Carbon;
 use App\Mail\DebtorReminderMail;
 use Illuminate\Support\Facades\Mail;

 class SendDebtorReminderMail extends Command
 {
     protected $signature = 'debtors:remind';

     protected $description = 'Send a reminder email to admin about unpaid invoices';

     public function handle()
     {
         $threeWeeksAgo = Carbon::now()->subWeeks(3);

         $debtors = OrderInvoice::with(['customer', 'createdBy', 'order'])
             ->whereHas('order', function($query) {
                 $query->whereHas('payments', function($q) {
                     $q->where('status', 'pending');
                 })->orWhereDoesntHave('payments');
             })
             ->where('created_at', '<=', $threeWeeksAgo)
             ->get();

         $debtors->each(function ($invoice) {
             $invoice->overdue_days = (int)Carbon::parse($invoice->created_at)->diffInDays(now());
         });

         if ($debtors->count() > 0) {
             Mail::to('developer@predsolutions.com')->send(new DebtorReminderMail($debtors));
             //Mail::to('developer@predsolutions.com')->send(new DebtorReminderMail($debtors));
             $this->info('Reminder email sent successfully.');
         } else {
             $this->info('No overdue invoices found.');
         }
     }
 }
