<div>
    <h1>Hello from Livewire Component</h1>
    <h5>My name is {{$name}}</h5>
    <!--input type="text" wire:model="title" -->
    <input type="text" wire:model.debounce.1500ms="title"><br>
    <textarea wire:model="body" name="" id="" cols="30" rows="10"></textarea><br>
    <input type="checkbox" wire:model="active" name="" id=""><br>
    <select wire:model="country" name="" id="">
        <option value="UK">UK</option>
        <option value="US">US</option>
        <option value="EU">EU</option>
    </select><br>
    <p>Title: {{$title}}</p>
    <p>Body: {{ $body }}</p>
    @if($active)<p>Status: Active</p>@else<p>Status: Inactive</p>@endif
    <p>Country: {{ $country}}</p>

</div>
