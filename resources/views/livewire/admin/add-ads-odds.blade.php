<div>
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit.prevent="submit" class="m-2">
        <div class="form-group">
            <div class="form-group">
                <label for="Odd" class="mb-2">Odd<span style="color:red">*</span></label>
                <input type="text" class="form-control" wire:model="odd" id="Odd">
                @error('odd') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="AdsName" class="mb-2">Ads Name<span style="color:red">*</span></label>
                <input type="text" class="form-control" wire:model="ads_name" id="AdsName">
                @error('ads_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="row">
                <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary text-white"> Add Odd</button>
                    <div wire:loading wire:target="submit" class="text-success">Wait We are Saving Your Data...</div>
                </div>
            </div>
        </div>
    </form>
</div>
