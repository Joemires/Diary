<div class="flex p-10 gap-x-5" style="flex-wrap: wrap">
    <div class="header w-full border-b-8 border-[#f3e5ab] md:h-[80px] flex justify-between gap-y-3 md:gap-y-0 gap-x-5" style="flex-wrap: wrap">
        <div class="w-full md:w-5/6">
            <h2 class="w-full md:w-auto bg-[#f3e5ab] pr-20 pl-2 md:pl-1 py-2 md:pt-0 md:pb-2 font-bold text-[32px] md:h-full flex items-end gap-1" style="display: inline-flex">
                Day <span> {{ $note->scheduled_at->dayOfYear }} </span>
            </h2>
        </div>
        <h5 class="bg-[#f9f2d3] px-2 py-2 md:pt-0 md:pb-2 font-bold text-lg md:h-full flex items-end gap-2 uppercase" style="flex: 1">Date :
            <span class="block border-b-[1px] border-black text-md font-light" style="flex: 1"> {{ $note->scheduled_at->format('d/m/Y') }} </span>
        </h5>
    </div>

    <div class="w-full md:w-5/6 space-y-4 pt-8 md:pl-6">
        <div class="form-group relative">
            <span class="text-lg pl-1 pr-2 bg-[#f3e5ab]">Today's Goal</span>
            <textarea class="notes" style="text-indent: 150px" rows="5" wire:model.lazy="note.goal"></textarea>
        </div>

        <div class="form-group relative">
            <span class="text-lg pl-1 pr-2 bg-[#f3e5ab]">Journal</span>
            <textarea class="notes" style="text-indent: 100px" rows="12" wire:model.lazy="note.journal"></textarea>
        </div>
    </div>
    <aside class="bg-[#f9f2d3] py-8" style="flex: 1">
        <div class="section h-[200px]">
            <h4 class="bg-[#f3e5ab] font-bold px-2 text-[20px] uppercase">Nutrition</h4>
            <label class="flex items-center gap-3 px-2">
                Aloe Water
                <input id="link-checkbox" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </label>
        </div>

        <div class="section space-y-3 mb-4">
            <h4 class="bg-[#f3e5ab] font-bold px-2 text-[20px] uppercase">Fitness</h4>
            <div class="space-y-2 font-bold px-3">
                <label class="flex items-center gap-3 justify-between">
                    Walk 30-45 mins
                    <input type="checkbox" wire:model="note.meta.fitness.walk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </label>

                <label class="flex items-center gap-3 justify-between">
                    Workout 30-45 mins
                    <input type="checkbox" wire:model="note.meta.fitness.workout" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </label>

                <label class="flex items-center gap-3 justify-between">
                    Rest Day
                    <input type="checkbox" wire:model="note.meta.fitness.rest" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </label>
            </div>
        </div>

        <div class="section space-y-3 mb-4">
            <h4 class="bg-[#f3e5ab] font-bold px-2 text-[20px] uppercase">Sleep</h4>
            <div class="space-y-2 font-bold px-3">
                <label class="flex items-center gap-3 justify-between">
                    Under 8 hours
                    <input value="<8" type="radio" wire:model="note.meta.sleep" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </label>

                <label class="flex items-center gap-3 justify-between">
                    8 Hours
                    <input value="8" type="radio" wire:model="note.meta.sleep" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </label>

                <label class="flex items-center gap-3 justify-between">
                    Over 8 Hours
                    <input value=">8" type="radio" wire:model="note.meta.sleep" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </label>
            </div>
        </div>

        <div class="section space-y-3">
            <h4 class="bg-[#f3e5ab] font-bold px-2 text-[20px] uppercase">Emotion</h4>
            <div class="space-y-2 text-sm px-3">
                <div class="form-group relative">
                    <span class="pl-1 pr-2 bg-[#f9f2d3] font-bold" style=" line-height: 50px">Gratitude</span>
                    <textarea class="notes" style="text-indent: 95px" rows="3" wire:model.lazy="note.meta.gratitude"></textarea>
                </div>
                <div class="form-group relative">
                    <span class="pl-1 pr-2 bg-[#f9f2d3] font-bold" style=" line-height: 50px">Affirmation</span>
                    <textarea class="notes" style="text-indent: 110px" rows="3" wire:model.lazy="note.meta.affirmation"></textarea>
                </div>
                <div class="form-group relative">
                    <span class="pl-1 pr-2 bg-[#f9f2d3] font-bold" style=" line-height: 50px">My Day Was</span>
                    <textarea class="notes" style="text-indent: 105px" rows="3" wire:model.lazy="note.meta.summary"></textarea>
                </div>
            </div>
        </div>
    </aside>
</div>
