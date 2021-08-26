<x-tests.app>
  <x-slot name="header">ヘッダー</x-slot>
コンポーネントテスト1
  <x-tests.card title="タイトル" content="本文" :message="$message" />
  <x-tests.card title="タイトル2" />
  <x-tests.card title="cssの変更" class="bg-red-300" />
</x-tests.app>