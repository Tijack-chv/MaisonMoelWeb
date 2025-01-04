<?php $i = 0; ?>
@for ($time = strtotime('12:30'); $time <= strtotime('22:00'); $time = strtotime('+30 minutes', $time))
    @if(in_array(date('H:i', $time), $hours))
        <li>
            <input type="radio" id="{{ date('H:i', $time) }}" onclick="updateDate()" name="hosting" value="{{ date('H:i', $time) }}" class="hidden peer"/>
            <label for="{{ date('H:i', $time) }}" class="inline-flex items-center text-center justify-between w-full px-2.5 py-2 text-white bg-[#292929] border border-zinc-700 rounded-lg cursor-pointer peer-checked:bg-[#323232] peer-checked:font-bold hover:bg-[#323232]">
                {{ date('H:i', $time) }}
            </label>
        </li>
    @endif
    <?php $i++; ?>
@endfor