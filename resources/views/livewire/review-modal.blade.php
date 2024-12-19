<div>
    <form wire:submit="submitRating">
        <div class="form-group">
            <label for="comfort_score">Sự thoải mái</label>
            <input type="number" wire:model.defer="comfort_score" class="form-control" id="comfort_score" min="0" max="10" step="0.1" {{ !$is_booked ? 'disabled' : '' }} required>
        </div>
        <div class="form-group">
            <label for="facilities_score">Tiện nghi</label>
            <input type="number" wire:model.defer="facilities_score" class="form-control" id="facilities_score" min="0" max="10" step="0.1" {{ !$is_booked ? 'disabled' : '' }} required>
        </div>
        <div class="form-group">
            <label for="staff_score">Nhân viên</label>
            <input type="number" wire:model.defer="staff_score" class="form-control" id="staff_score" min="0" max="10" step="0.1" {{ !$is_booked ? 'disabled' : '' }} required>
        </div>
        <div class="form-group">
            <label for="food_score">Thức ăn</label>
            <input type="number" wire:model.defer="food_score" class="form-control" id="food_score" min="0" max="10" step="0.1" {{ !$is_booked ? 'disabled' : '' }} required>
        </div>
        <div class="form-group">
            <label for="value_score">Tỷ lệ giá cả - chất lượng</label>
            <input type="number" wire:model.defer="value_score" class="form-control" id="value_score" min="0" max="10" step="0.1" {{ !$is_booked ? 'disabled' : '' }} required>
        </div>
        <button type="submit" class="btn btn-primary" {{ !$is_booked ? 'disabled' : '' }}>Gửi đánh giá</button>
    </form>
</div>