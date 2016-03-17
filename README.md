```
$ php pre/test.php // creates serialized.data

$ php post1/test.php
object(Option)#1 (2) {
  ["fee":"Option":private]=>
  int(100)
  ["hideZeroImpressionCampaign":"Option":private]=>
  NULL
}

$ php post2/test.php
object(Option)#1 (2) {
  ["fee":"Option":private]=>
  int(100)
  ["hideZeroImpressionCampaign":"Option":private]=>
  bool(false)
}
```
