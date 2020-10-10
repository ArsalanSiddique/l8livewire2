<div>
    <form wire:submit.prevent="add">
        <input type="text" name="" wire:model.lazy="num1" id="">
        <input type="text" name="" wire:model.lazy="num2" id="">
        <!-- <button type="submit" wire:click="$emit('resultCalculated')">Add</button> -->
        <button type="submit">Show Result</button>
    </form>
    {{ $result }}
    {{ $message }}
</div>