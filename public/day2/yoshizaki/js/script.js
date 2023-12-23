function clickEvent() {
  let res = confirm('この内容で送信しますか？');
  if (res === true) {
    alert('送信しました');
  } else {
    alert('送信をキャンセルしました');
  }
}
