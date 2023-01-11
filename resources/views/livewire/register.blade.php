<div>
    <form wire:submit.prevent="register">
        <lavel for="name">名前</label>
        <input id="name" type="text" wire:model="name"><br>
        @error('name') <div class="text-red-400">{{ $message }}</div> @enderror

        <lavel for="email">メールアドレス</label>
        <input id="email" type="email" wire:model="email"><br>
        @error('email') <div class="text-red-400">{{ $message }}</div> @enderror

        <lavel for="password">パスワード</label>
        <input id="password" type="password" wire:model="password"><br>
        @error('password') <div class="text-red-400">{{ $message }}</div> @enderror
        <button>登録する</button>
    </form>
</div>
