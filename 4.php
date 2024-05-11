<?php
function NewParcer()
{
$headers = array(
    'cache-control: max-age=0',
    'upgrade-insecure-requests: 1',
    'user-agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36',
    'sec-fetch-user: ?1',
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
    'x-compress: null',
    'sec-fetch-site: none',
    'sec-fetch-mode: navigate',
    'accept-encoding: deflate, br',
    'accept-language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7',
);
try {
  $ch = curl_init('https://megamarket.ru');
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_HEADER, true);
  $html = curl_exec($ch);
  curl_close($ch);
  $doc = phpQuery::newDocument($html);
  foreach($doc->find(".product-list-item-link") as $article){
    }
  echo $html;
} catch (\Exception $e) {
  var_dump("Ошибка!: " . $e->getMessage(), $e->getTrace());
}

}
 ?>
