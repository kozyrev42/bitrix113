<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/* далее следуют свойства страницы, доступные для редактирования из админки */
$APPLICATION->SetPageProperty("ROBOTS", "index, follow+++ (Свойства страницы)");
$APPLICATION->SetPageProperty("TITLE", "Title+++ (Свойства страницы)");
$APPLICATION->SetPageProperty("keywords", "ключевые слова example1+ (Свойства страницы)");
$APPLICATION->SetPageProperty("description", "описание из админки example1+ (Свойства страницы)");
/* заголовок страницы */
$APPLICATION->SetTitle("Title - который по умолчанию");     /* Строка будет отображаться в Логической структуре сайта */
?>
hello world !
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>