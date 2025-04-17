<x-layout.app>
    <x-container>
        <x-card title="Editing link :: id{{ $link->id }} ">
            <x-form :route="route('links.edit', $link)" put id="form">
                <x-input name="link" placeholder="Link" value="{{ old('link', $link->link) }}" />
                <x-input name="name" placeholder="Name" value="{{ old('name', $link->name) }}" />
            </x-form>

            <x-slot name="actions">
                <x-button :onclick="route('dashboard')">Cancel</x-button>
                <x-button type="submit" class="btn btn-primary" form="form">Update link</x-button>
            </x-slot>
        </x-card>
    </x-container>
</x-layout.app>
