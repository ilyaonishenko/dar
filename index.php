<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
//$APPLICATION->SetTitle("Крутая компания!");
?><script>
        function setHeiHeight() {
            $('#hei').css({
                height: $(window).height() + 'px'
            });
        }
        setHeiHeight(); // устанавливаем высоту окна при первой загрузке страницы
        $(window).resize( setHeiHeight ); // обновляем при изменении размеров окна
    </script>
<div id="workarea">
<center>
<?$APPLICATION->IncludeComponent("bitrix:furniture.catalog.index", "", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "2",
	"IBLOCK_BINDING" => "section",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N"
	),
	false
);?>
    <div id="column">
         <img id="columns" src="http://localhost:8888/bitrix/templates/furniture_pink/images/3.png">
    </div>
</center>
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>