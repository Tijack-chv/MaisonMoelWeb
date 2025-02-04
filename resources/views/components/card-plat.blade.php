<div class="bg-[#292929] border-[0.1rem] text-[#FFEB99] border-[#FFEB99] rounded-lg text-center">
    <img src="http://192.168.143.9:8080/{{ $image }}" alt="" class="object-cover w-full h-48 mx-auto rounded-md">
    <h2 class="text-2xl pt-4"><abbr title="{{ ucfirst($type) }}" class="no-underline">{{ $slot }}</abbr></h2>
    <h5 class="text-zinc-400 pt-1 pb-2">{{ $prix }}€</h5>
</div>