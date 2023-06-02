<div>
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit.prevent="submit" class="m-2">
        <div class="form-group">
            <div class="form-group">
                <label for="MarketierName" class="mb-2">Marketier Name<span style="color:red">*</span></label>
                <input type="text" class="form-control" wire:model="marketier_name" id="MarketierName">
                @error('marketier_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Contact" class="mb-2">Contact<span style="color:red">*</span></label>
                <input type="text" class="form-control" wire:model="contact" id="Contact">
                @error('contact') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Email" class="mb-2">Email<span style="color:red">*</span></label>
                <input type="email" class="form-control" wire:model="email" id="Email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Password" class="mb-2">Password<span style="color:red">*</span></label>
                <input type="password" class="form-control" wire:model="password" id="Password">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="row">
                <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary text-white"> Add Marketier</button>
                    <div wire:loading wire:target="submit" class="text-success">Wait We are Saving Your Data...</div>
                </div>
            </div>
        </div>
    </form>
</div>
