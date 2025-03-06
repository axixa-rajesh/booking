<div>
    <h1>Livewire Counter: <span id="count">{{ $count }}</span></h1>
    <button id="increaseBtn" class="bg-blue-500 text-white px-4 py-2 rounded">Increase</button>

    <script>
        document.getElementById('increaseBtn').addEventListener('click', function () {
            Livewire.emit('increaseCounter'); // Emit Livewire event from JavaScript
        });
    </script>
</div>