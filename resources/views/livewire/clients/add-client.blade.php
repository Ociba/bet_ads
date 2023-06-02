<div>
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit.prevent="submit" class="m-2">
        <div class="form-group">
            <div class="form-group">
                <label for="NameOfClient" class="mb-2">Name of Client<span style="color:red">*</span></label>
                <input type="text" class="form-control" wire:model="client_name" id="NameOfClient">
                @error('client_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Phonenumber" class="mb-2">Phone Number<span style="color:red">*</span></label>
                <input type="text" class="form-control" wire:model="phone_number" id="Phonenumber">
                @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Email" class="mb-2">Email<span style="color:red">*</span></label>
                <input type="email" class="form-control" wire:model="clients_email" id="Email">
                @error('clients_email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Password" class="mb-2">Password<span style="color:red">*</span></label>
                <input type="password" class="form-control" wire:model="password" id="Password">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="row">
                <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary text-white"> Add Client</button>
                    <div wire:loading wire:target="submit" class="text-success">Wait We are Saving Your Data...</div>
                </div>
            </div>
        </div>
    </form>
</div>
