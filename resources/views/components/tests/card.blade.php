@props([
  'title',
  'message' => '初期値メッセージ',
  'content' => '初期値本文'
])

<div class="border-2 shadow-md w-1/4 p-2">
  <div>{{ $title }}</div>
  <div>画像</div>
  <div>{{ $content }}</div>
  <div>{{ $message }}</div>
</div>