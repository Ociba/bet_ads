<div>
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit.prevent="withdrawMoney" class="m-2">
        <div class="form-group">  
            <div class="form-group">
                <label for="TotalOdds" class="mb-2">Enter Amount You Want to Withdraw &nbsp; <span style="color:red">*</span></label>
                <input type="text" class="form-control" wire:model="amount_withdrawn" id="TotalOdds">
                @error('amount_withdrawn') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="row">   
                <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary text-white"> Withdraw Now</button>
                    <div wire:loading wire:target="submit" class="text-success">Wait We are Saving Your Data...</div>
                </div>
            </div>
        </div>
    </form>
</div>