<div>

    <form class="pt-6 flex" wire:submit.prevent="store({{ $receiverID }})">
        <input type="hidden" wire:model="receiverId" value="{{ request()->userID }}">
        <input type="text" class="border w-full p-3 px-4 rounded-md" wire:model="message" placeholder="Escriba aquí su mensaje...">
        <button class="px-4 py-2 bg-indigo-50 outline-none border border-indigo-100 rounded text-indigo-500 font-medium active:scale-95 hover:bg-indigo-400 hover:text-white focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 disabled:bg-gray-400/80 disabled:shadow-none disabled:cursor-not-allowed transition-colors duration-200">Enviar</button>

        
    </form>
    
</div>
