<div>
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit.prevent="submit" class="m-2">
        <div class="form-group">
            <div class="form-group">
                <input type="hidden" class="form-control" wire:model="marketier_id" id="MarketierId">
            </div>   
            <div class="form-group">
                <label for="TotalOdds" class="mb-2">Odd<span style="color:red">*</span></label>
                <input type="text" class="form-control" wire:model="total_odds" id="TotalOdds">
                @error('total_odds') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Amount" class="mb-2">Amount<span style="color:red">*</span></label>
                <input type="number" class="form-control" wire:model="amount" id="Amount">
                @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="row">
                <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary text-white"> Deposit</button>
                    <div wire:loading wire:target="submit" class="text-success">Wait We are Saving Your Data...</div>
                </div>
            </div>
        </div>
    </form>
</div>
