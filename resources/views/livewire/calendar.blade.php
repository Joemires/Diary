@push('styles')
    <style>
        .datepicker-picker, .days, .datepicker-grid {
            width: 100%
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready( function () {
            $('.datepicker-cell').click( function () {
                @this.set('created_at', new Date($(this).data('date')).toLocaleDateString("en-US"))
            })
        });
    </script>
@endpush

<x-modal.card title="Change Note Date" wire:model.defer="changeCalendarModal" align="center" blur>
    <div class="relative max-w-sm m-auto">
        <div wire:ignore inline-datepicker datepicker-buttons data-date="{{ now()->format('m/d/Y') }}" datepicker-title="Select A Date" class=""></div>
    </div>
</x-modal.card>
