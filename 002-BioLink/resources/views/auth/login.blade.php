<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" placeholder="Email" value="{{old('email')}}" />
                <x-input type="password" name="password" placeholder="Password" />
            </x-form>
            <x-slot:actions>
                <x-button type="submit" class="btn btn-primary" type="submit" form="login-form">Logar</x-button>
                <x-a :href="route('register')">Register</x-a>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>