<form wire:submit="addTask">
    <label for="">Add new task</label>
    <div>
        <textarea wire:model="taskName" name="task" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="submit" class="bg-indigo-600 text-white">Add</button>
    </div>
</form>