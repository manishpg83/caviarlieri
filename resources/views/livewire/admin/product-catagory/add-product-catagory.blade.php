<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- Card Header -->
                <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="card-title mb-sm-0 me-2">
                        {{ $isEditMode ? 'Edit Product Category' : 'Add New Product Category' }}
                    </h5>
                    <div class="action-btns">
                        <button wire:click="back" class="btn btn-label-primary me-4">
                            <span class="align-middle">Back</span>
                        </button>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <form wire:submit.prevent="submit" class="row g-3 mt-2">
                                <!-- Category Name Input -->
                                <div class="col-md-6">
                                    <label class="form-label" for="category_name">Category Name</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="category_name" 
                                        wire:model.defer="category_name" 
                                        placeholder="Enter category name" 
                                        required>
                                    @error('category_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Status Select -->
                                <div class="col-md-6">
                                    <label class="form-label" for="status">Status</label>
                                    <select 
                                        class="form-select" 
                                        id="status" 
                                        wire:model.defer="status" 
                                        required>
                                        <option value="">Select status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ $isEditMode ? 'Update Category' : 'Add Category' }}
                                    </button>
                                </div>
                            </form>

                            <!-- Success Message -->
                            @if (session()->has('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Error Message -->
                            @if (session()->has('error'))
                                <div class="alert alert-danger mt-3">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
