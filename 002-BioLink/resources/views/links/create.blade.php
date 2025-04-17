<x-layout.app>
    <x-container>
        <x-card title="Create a new link">
            <x-form :route="route('links.create')" post id="form">
                <x-input name="link" placeholder="Link" value="{{ old('link') }}" />
                <x-input name="name" placeholder="Name" value="{{ old('name') }}" />
            </x-form>

            <x-slot name="actions">
                <x-a :href="route('dashboard')">Cancel</x-a> 
                <x-button type="submit" class="btn btn-primary" form="form">Create a new link</x-button>
            </x-slot>
        </x-card>
    </x-container>
</x-layout.app>
