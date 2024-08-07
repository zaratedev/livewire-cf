<div>
    <select wire:model.live="selectedCategory" name="category" id="">
        <option value="">All</option>
        @foreach ($categories as $category)
            <option value="{{ $category }}">{{ $category }}</option>
        @endforeach
    </select>
    <ul>
        @foreach ($this->faqs as $faq)
            <li>{{ $faq->name }} ({{ $faq->category }}) - {{ $faq->description }}</li>
        @endforeach
    </ul>
</div>
