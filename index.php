<html lang="ru">
		<head>
			
			<!-- Beta Version. Разработано для клана СССР персонажем Connection Failed -->
			<script type="text/javascript" src="moment.js">
	var daysAll=+document.forms["zakl"]["Form_2"].value;
	var hours=+document.forms["zakl"]["Form_3"].value;
	var zaklOffDay=moment().add('days', daysAll );
			</script>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="css/style.css"/>
			<style type="text/css">
			.beg {
.input-container  select  {
    border-radius: 70px;
    height: 220px;
    width: 460px;
}
			</style>
			<!-- ........................Скрипты проверки на заполненность полей........................ -->
			<!-- Проверяем заполнено ли поле название вещи -->
			<script type="text/javascript">
function validateForm()
{
var x=document.forms["zakl"]["Form_1"].value;
if (x==null || x=="")
  {
  alert("Название обязательно должно быть введено!");
  return false;
  }
}
</script>
<!-- Проверяем заполнено ли часы -->
<script type="text/javascript">
function validateForm()
{
var x=document.forms["zakl"]["Form_3"].value;
if (x==null || x=="")
  {
  alert("Введите количество оставшихся часов!");
  return false;
  }
}
</script>
<!-- Стиль формы -->
<style type="text/css">
input.text {
    width:  200px;
    height: 15px;
    padding: 5px 10px 5px 10px;
    border:1px solid #999;
    font-size:16px;
    font-family: Tahoma;
}
</style>




		</head>
			<body>
<!-- Поле для ввода названия вещи (с поддержкой выпадающего списка вещей для помощи при вводе)	-->			
<label for="shmot">Название вещи:</label>
<form action="zakl.php" name="zakl">
<input type="text" name="Form_1" id="shmot" list="shmot_list">
<datalist id="shmot_list">
<option>Алебарда Сторожевая</option>
<option>Арбалет Лёгкий</option>
<option>Арбалет Учебный</option>
<option>Амулет Архангела</option>
<option>Башенный щит</option>
<option>Амулет Боли</option>
<option>Амулет Брони</option>
<option>Амулет Безразличия</option>
<option>Амулет Ветра</option>
<option>Амулет Владыки</option>
<option>Амулет Возмездия</option>
<option>Амулет Волка</option>
<option>Амулет Доблести</option>
<option>Амулет Достоинства</option>
<option>Амулет Забвения</option>
<option>Амулет Защиты</option>
<option>Амулет Зевса</option>
<option>Амулет Измора</option>
<option>Амулет Коварства</option>
<option>Амулет Мастера</option>
<option>Амулет Медведя</option>
<option>Амулет Мертвеца</option>
<option>Амулет Молнии</option>
<option>Амулет Мужества</option>
<option>Амулет Невидимки</option>
<option>Амулет Невиновности</option>
<option>Амулет Невозмутимости</option>
<option>Амулет Ненависти</option>
<option>Амулет Орла</option>
<option>Амулет Отваги</option>
<option>Амулет Очарования</option>
<option>Амулет Пантеры</option>
<option>Амулет Перевоплощения</option>
<option>Амулет Пламени</option>
<option>Амулет Подавления</option>
<option>Амулет Поклонения</option>
<option>Амулет Привидения</option>
<option>Амулет Призрака</option>
<option>Амулет Прозрения</option>
<option>Амулет Рассудительности</option>
<option>Амулет Рассудка</option>
<option>Амулет Росомахи</option>
<option>Амулет Света</option>
<option>Амулет Силы</option>
<option>Амулет Созвездий</option>
<option>Амулет Спасения</option>
<option>Амулет Стихий</option>
<option>Амулет Странника</option>
<option>Амулет Страха</option>
<option>Амулет Терпимости</option>
<option>Амулет Террора</option>
<option>Амулет Тигра</option>
<option>Амулет Упорства</option>
<option>Амулет Чести</option>
<option>Амулет Юпитера</option>
<option>Белый Крест</option>
<option>Божественный Меч</option>
<option>Бригантина</option>
<option>Броня Безразличия</option>
<option>Броня Белого Рыцаря</option>
<option>Броня Двуцветная</option>
<option>Броня Доблести</option>
<option>Броня Крестоносца</option>
<option>Броня Легкая</option>
<option>Броня Оберега</option>
<option>Броня силы</option>
<option>Броня Уворота</option>
<option>Броня Удачи</option>
<option>Броня Упорства</option>
<option>Булава Великана</option>
<option>Булава Пантеры</option>
<option>Булава Малая</option>
<option>Булава Торина</option>
<option>Волчёнка</option>
<option>Всепроникающий Меч</option>
<option>Глаз Дракона</option>
<option>Глаз Тигра</option>
<option>Дубина Прозрения</option>
<option>Дубина с Шипами</option>
<option>Дубина Ювелирная</option>
<option>Жакет из Кожи</option>
<option>Золотое Кольцо</option>
<option>Золотой Кулон</option>
<option>Золотые Латы</option>
<option>Золотые Перчатки</option>
<option>Золотой Пояс</option>
<option>Золотые Сапоги</option>
<option>Золотой Топор</option>
<option>Золотой Шлем</option>
<option>Золотой щит</option>
<option>Каменный топор вождя</option>
<option>Кастет Крови</option>
<option>Кастет "Лезвие"</option>
<option>Кастет "Оса"</option>
<option>Кастет "Скорпион"</option>
<option>Кастет Удивления</option>
<option>Кастет "Череп"</option>
<option>Кафтан</option>
<option>Кинжал Безразличия</option>
<option>Кинжал Боли</option>
<option>Кинжал Вампира</option>
<option>Кинжал Демона</option>
<option>Кинжал Достоинства</option>
<option>Кинжал Измора</option>
<option>Кинжал Самурая</option>
<option>Кинжал Успокоения</option>
<option>Кираса Блестящая</option>
<option>Кираса Медная</option>
<option>Кираса Походная</option>
<option>Кнут Боевой</option>
<option>Когти Боевые</option>
<option>Колье Дорожное</option>
<option>Колье Храбрости</option>
<option>Кольцо Архангела</option>
<option>Кольцо Баланса</option>
<option>Кольцо Безразличия</option>
<option>Кольцо Бешенства</option>
<option>Кольцо Ветра</option>
<option>Кольцо Владыки</option>
<option>Кольцо Власти</option>
<option>Кольцо Воды</option>
<option>Кольцо Возмездия</option>
<option>Кольцо Волка</option>
<option>Кольцо Воскрешения</option>
<option>Кольцо Движения</option>
<option>Кольцо Демона</option>
<option>Кольцо Достоинства</option>
<option>Кольцо Жизни</option>
<option>Кольцо Забвения</option>
<option>Кольцо Защиты леса</option>
<option>Кольцо Зевса</option>
<option>Кольцо Земли</option>
<option>Кольцо Зелёного Дракона</option>
<option>Кольцо Злости</option>
<option>Кольцо Измора</option>
<option>Кольцо Коварства</option>
<option>Кольцо Магической защиты</option>
<option>Кольцо Мастера поединка</option>
<option>Кольцо Медведя</option>
<option>Кольцо Медное</option>
<option>Кольцо Мертвеца</option>
<option>Кольцо Молнии</option>
<option>Кольцо Мужества</option>
<option>Кольцо Невиновности</option>
<option>Кольцо Ненависти</option>
<option>Кольцо Орла</option>
<option>Кольцо Отражения</option>
<option>Кольцо Очарования</option>
<option>Кольцо Пантеры</option>
<option>Кольцо Перевоплощения</option>
<option>Кольцо Повелителя Морей</option>
<option>Кольцо Повиновения</option>
<option>Кольцо Подавления</option>
<option>Кольцо Поклонения</option>
<option>Кольцо Посейдона</option>
<option>Кольцо Привидения</option>
<option>Кольцо Призрака</option>
<option>Кольцо Прозрения</option>
<option>Кольцо Разрушителя</option>
<option>Кольцо Рассудительности</option>
<option>Кольцо Рассудка</option>
<option>Кольцо Росомахи</option>
<option>Кольцо Самурая</option>
<option>Кольцо Созвездий</option>
<option>Кольцо Старого Мастера</option>
<option>Кольцо Стихий</option>
<option>Кольцо Терпимости</option>
<option>Кольцо Террора</option>
<option>Кольцо Тигра</option>
<option>Кольцо Тора</option>
<option>Кольцо Удачи</option>
<option>Кольцо Уклонения</option>
<option>Кольцо Упорства</option>
<option>Кольцо Урона</option>
<option>Кольцо Хранителя</option>
<option>Кольцо Чести</option>
<option>Кольцо Юпитера</option>
<option>Кольчуга Архангела</option>
<option>Кольчуга Лёгкая</option>
<option>Кольчуга Полная</option>
<option>Кольчуга Призрака</option>
<option>Кожанка</option>
<option>Копье Боевое</option>
<option>Крест Тора</option>
<option>Кулон "Виктория"</option>
<option>Лазурная броня</option>
<option>Лазурное кольцо</option>
<option>Лазурный Амулет</option>
<option>Лазурный шлем</option>
<option>Латы Боли</option>
<option>Латы Ветра</option>
<option>Латы Владыки</option>
<option>Латы Возмездия</option>
<option>Латы Волка</option>
<option>Латы Достоинства</option>
<option>Латы Забвения</option>
<option>Латы Зевса</option>
<option>Латы Измора</option>
<option>Латы Коварства</option>
<option>Латы Крови</option>
<option>Латы Медведя</option>
<option>Латы Мертвеца</option>
<option>Латы Молнии</option>
<option>Латы Невиновности</option>
<option>Латы Ненависти</option>
<option>Латы Орла</option>
<option>Латы Отваги</option>
<option>Латы Отражения</option>
<option>Латы Очарования</option>
<option>Латы Пантеры</option>
<option>Латы Перевоплощения</option>
<option>Латы Подавления</option>
<option>Латы Поклонения</option>
<option>Латы Привидения</option>
<option>Латы Прозрения</option>
<option>Латы Разрушителя</option>
<option>Латы Рассудительности</option>
<option>Латы Рассудка</option>
<option>Латы Росомахи</option>
<option>Латы Самурая</option>
<option>Латы Созвездий</option>
<option>Латы Стихий</option>
<option>Латы Терпимости</option>
<option>Латы Террора</option>
<option>Латы Тигра</option>
<option>Латы Титанов</option>
<option>Латы Удовольствия</option>
<option>Латы Чести</option>
<option>Латы Юпитера</option>
<option>Ледяные Латы</option>
<option>Лёгкий Шлем</option>
<option>Лук Боевой</option>
<option>Лук Ивовый</option>
<option>Лук Охотника</option>
<option>Лук Простой</option>
<option>Лунный Кинжал</option>
<option>Меч Анубиса</option>
<option>Меч Архангела</option>
<option>Меч Атаки</option>
<option>Меч Ведьмы</option>
<option>Меч Властителей</option>
<option>Меч Волшебника</option>
<option>Меч Гладиатора</option>
<option>Меч Забвения</option>
<option>Меч Длинный</option>
<option>Меч Изумрудный</option>
<option>Меч Короткий</option>
<option>Меч Правосудия</option>
<option>Меч Отваги</option>
<option>Меч Призрака</option>
<option>Меч Странника</option>
<option>Меч Подавления</option>
<option>Меч Рыбьего страха</option>
<option>Меч Рассудка</option>
<option>Меч Чёрного рыцаря</option>
<option>Меч Правосудия Хоббитов</option>
<option>Меч Молнии</option>
<option>Меч Ненависти</option>
<option>Меч Поклонения</option>
<option>Меч Сглаза</option>
<option>Меч Ювелирный</option>
<option>Меч Королей</option>
<option>Меч Мертвеца</option>
<option>Меч Терпимости</option>
<option>Меч Чести</option>
<option>Меч Тора</option>
<option>Меч Невиновности</option>
<option>Меч Террора</option>
<option>Меч Таинос</option>
<option>Меч Страха</option>
<option>Меч Колдуна</option>
<option>Меч Смелости</option>
<option>Меч Привидения</option>
<option>Меч Юпитера</option>
<option>Меч Стихий</option>
<option>Меч Коварства</option>
<option>Меч Созвездий</option>
<option>Нож-кастет</option>
<option>Нож Следопыта</option>
<option>Нож Охотника</option>
<option>Нож защитный</option>
<option>Нож-Кастет Спасения</option>
<option>Тесак боевой</option>
<option>Тесак Очарования</option>
<option>Серп раскаяния</option>
<option>Лазурный меч</option>
<option>Сатанистский меч</option>
<option>Платиновый меч</option>
<option>Мифриловый Меч</option>
<option>Сабля Ледяная</option>
<option>Сабля Перевоплощения</option>
<option>Палаш Упорства</option>
<option>Палаш Доблести</option>
<option>Палица богатырская</option>
<option>Палица Изворотливости</option>
<option>Скипетр обычный</option>
<option>Огненный молот</option>
<option>Молот Злости</option>
<option>Стальной Молот</option>
<option>Молот раскалённый</option>
<option>Молот малахитовый</option>
<option>Молот удачи</option>
<option>Молот Волшебника</option>
<option>Топор Спокойствия</option>
<option>Топор Возмездия</option>
<option>Топор Кровавый</option>
<option>Топор войны</option>
<option>Серебряный топор</option>
<option>Топор дровосека</option>
<option>Топор скорпион</option>
<option>Топор убийцы драконов</option>
<option>Топор ювелирный</option>
<option>Топор двусторонний</option>
<option>Топор Луны</option>
<option>Топор Боли</option>
<option>Топор Владыки</option>
<option>Секира сторожевая</option>
<option>Секира злости</option>
<option>Посох Шипованный</option>
<option>Посох Зевса</option>
<option>Стальные когти</option>
<option>Молот Волка</option>
<option>Молот Медведя</option>
<option>Молот Тигра</option>
<option>Меч Росомахи</option>
<option>Топор Орла</option>
<option>Посох шамана</option>
<option>Несущий Смерть</option>
<option>Пика двуручная</option>
<option>Секира Разрушителя</option>
<option>Скипетр Королей</option>
<option>Пламя ярости</option>
<option>Метательные ежи</option>
<option>Сюрикены Ученика</option>
<option>Сякены Бронзовые</option>
<option>Сякены</option>
<option>Сюрикены</option>
<option>Рогатка простая</option>
<option>Шлем медный</option>
<option>Шапка охотничья</option>
<option>Шлем Доблести</option>
<option>Шлем Мертвеца</option>
<option>Шлем Мужества</option>
<option>Шлем мастера</option>
<option>Шлем походный</option>
<option>Шлем Боли</option>
<option>Шлем Терпимости</option>
<option>Шлем Упорства</option>
<option>Огненный шлем</option>
<option>Шлем Достоинства</option>
<option>Шлем Ненависти</option>
<option>Шлем Чести</option>
<option>Шлем Чёрного рыцаря</option>
<option>Шлем Ледяной</option>
<option>Шлем Призрака</option>
<option>Шлем Террора</option>
<option>Небесный шлем</option>
<option>Шлем Белого рыцаря</option>
<option>Шлем Безразличия</option>
<option>Шлем Пламенный</option>
<option>Шлем Рассудка</option>
<option>Шлем платиновый</option>
<option>Шлем Проникновения</option>
<option>Шлем Кровавый</option>
<option>Шлем Молнии</option>
<option>Шлем Невиновности</option>
<option>Шлем Луны</option>
<option>Мифриловый Шлем</option>
<option>Шлем демона</option>
<option>Шлем Измора</option>
<option>Шлем Отваги</option>
<option>Шлем Поклонения</option>
<option>Шлем Сопротивления</option>
<option>Шлем Могущества</option>
<option>Шлем Солнца</option>
<option>Шлем Архангела</option>
<option>Шлем Подавления</option>
<option>Шлем Разрушителя</option>
<option>Шлем Владыки</option>
<option>Шлем Зевса</option>
<option>Шлем Привидения</option>
<option>Шлем Очарования</option>
<option>Шлем Перевоплощения</option>
<option>Шлем Юпитера</option>
<option>Шлем Ветра</option>
<option>Шлем Прозрения</option>
<option>Шлем Стихий</option>
<option>Шлем Забвения</option>
<option>Шлем Коварства</option>
<option>Шлем Созвездий</option>
<option>Шлем Волка</option>
<option>Шлем Медведя</option>
<option>Шлем Тигра</option>
<option>Шлем Орла</option>
<option>Шлем Пантеры</option>
<option>Шлем Росомахи</option>
<option>Талисман предков</option>
<option>Призрачный Амулет</option>
<option>Огненный Амулет</option>
<option>Чёрный Крест</option>
<option>Рубашка защитная</option>
<option>Панцирь Татуированный</option>
<option>Панцирь простой</option>
<option>Панцирь Мужества</option>
<option>Огненная броня</option>
<option>Панцирь Чёрного рыцаря</option>
<option>Доспехи оруженосца</option>
<option>Платиновый панцирь</option>
<option>Мифриловая Броня</option>
<option>Наручи медные</option>
<option>Перчатки Упорства</option>
<option>Перчатки Возмездия</option>
<option>Перчатки Поклонения</option>
<option>Перчатки охотника</option>
<option>Перчатки рейнджера</option>
<option>Перчатки Безразличия</option>
<option>Перчатки Достоинства</option>
<option>Перчатки Измора</option>
<option>Огненные перчатки</option>
<option>Перчатки Мертвеца</option>
<option>Перчатки Ненависти</option>
<option>Перчатки Террора</option>
<option>Лазурные перчатки</option>
<option>Перчатки Чёрного рыцаря</option>
<option>Перчатки Молнии</option>
<option>Перчатки Терпимости</option>
<option>Перчатки Чести</option>
<option>Перчатки Белого рыцаря</option>
<option>Перчатки Боли</option>
<option>Перчатки Доблести</option>
<option>Перчатки Отваги</option>
<option>Платиновые наручи</option>
<option>Перчатки Невиновности</option>
<option>Перчатки Рассудительности</option>
<option>Перчатки Рассудка</option>
<option>Перчатки Успеха</option>
<option>Мифриловые Перчатки</option>
<option>Перчатки Властелина</option>
<option>Перчатки Ледяные</option>
<option>Перчатки Подавления</option>
<option>Перчатки Уверенности</option>
<option>Перчатки Тора</option>
<option>Перчатки Невозмутимости</option>
<option>Перчатки Мужества</option>
<option>Перчатки Призрака</option>
<option>Перчатки Самурая</option>
<option>Перчатки Владыки</option>
<option>Перчатки Зевса</option>
<option>Перчатки Привидения</option>
<option>Перчатки Очарования</option>
<option>Перчатки Перевоплощения</option>
<option>Перчатки Юпитера</option>
<option>Перчатки Ветра</option>
<option>Перчатки Прозрения</option>
<option>Перчатки Стихий</option>
<option>Перчатки Забвения</option>
<option>Перчатки Коварства</option>
<option>Перчатки Созвездий</option>
<option>Перчатки Волка</option>
<option>Перчатки Медведя</option>
<option>Перчатки Тигра</option>
<option>Перчатки Орла</option>
<option>Перчатки Пантеры</option>
<option>Перчатки Росомахи</option>
<option>Пояс охотника</option>
<option>Пояс странника</option>
<option>Пояс Безразличия</option>
<option>Пояс Ненависти</option>
<option>Пояс Упорства</option>
<option>Огненный пояс</option>
<option>Пояс Мертвеца</option>
<option>Пояс Невиновности</option>
<option>Пояс Поклонения</option>
<option>Пояс Возмездия</option>
<option>Пояс Подавления</option>
<option>Пояс Рассудка</option>
<option>Лазурный пояс</option>
<option>Пояс спасения</option>
<option>Пояс Молнии</option>
<option>Пояс Рассудительности</option>
<option>Пояс Терпимости</option>
<option>Пояс отчаяния</option>
<option>Пояс крестоносца</option>
<option>Пояс Мужества</option>
<option>Пояс Террора</option>
<option>Пояс Чести</option>
<option>Пояс растамана</option>
<option>Пояс могущества</option>
<option>Пояс Достоинства</option>
<option>Пояс Призрака</option>
<option>Пояс Разрушителя</option>
<option>Пояс Невозмутимости</option>
<option>Пояс Удачи</option>
<option>Пояс Боли</option>
<option>Пояс Доблести</option>
<option>Пояс Отваги</option>
<option>Пояс Владыки</option>
<option>Пояс Зевса</option>
<option>Пояс Привидения</option>
<option>Пояс Очарования</option>
<option>Пояс Перевоплощения</option>
<option>Пояс Юпитера</option>
<option>Пояс Ветра</option>
<option>Пояс Прозрения</option>
<option>Пояс Стихий</option>
<option>Пояс Забвения</option>
<option>Пояс Коварства</option>
<option>Пояс Созвездий</option>
<option>Пояс Волка</option>
<option>Пояс Медведя</option>
<option>Пояс Тигра</option>
<option>Пояс Орла</option>
<option>Пояс Пантеры</option>
<option>Пояс Росомахи</option>
<option>Сапоги охотника</option>
<option>Сапоги воина</option>
<option>Поножи медные</option>
<option>Поножи Безразличия</option>
<option>Поножи Возмездия</option>
<option>Поножи Упорства</option>
<option>Лазурные сапоги</option>
<option>Сапоги лазурные</option>
<option>Поножи Измора</option>
<option>Поножи Ненависти</option>
<option>Поножи Подавления</option>
<option>Сапоги Чёрного рыцаря</option>
<option>Поножи Поклонения</option>
<option>Поножи Рассудка</option>
<option>Поножи Терпимости</option>
<option>Поножи кольчужные</option>
<option>Огненные сапоги</option>
<option>Поножи платиновые</option>
<option>Поножи Невиновности</option>
<option>Поножи Рассудительности</option>
<option>Поножи Чести</option>
<option>Сапоги Белого рыцаря</option>
<option>Поножи Призрака</option>
<option>Поножи Разрушителя</option>
<option>Поножи Террора</option>
<option>Сапоги превосходства</option>
<option>Сандалии Меткости</option>
<option>Мифриловые Поножи</option>
<option>Поножи Архангела</option>
<option>Поножи Достоинства</option>
<option>Поножи Мужества</option>
<option>Поножи Уюта</option>
<option>Сапоги Гордости</option>
<option>Поножи Уничтожителя</option>
<option>Поножи Боли</option>
<option>Поножи Доблести</option>
<option>Поножи Отваги</option>
<option>Поножи Владыки</option>
<option>Поножи Зевса</option>
<option>Поножи Привидения</option>
<option>Поножи Очарования</option>
<option>Поножи Перевоплощения</option>
<option>Поножи Юпитера</option>
<option>Поножи Ветра</option>
<option>Поножи Прозрения</option>
<option>Поножи Стихий</option>
<option>Поножи Забвения</option>
<option>Поножи Коварства</option>
<option>Поножи Созвездий</option>
<option>Поножи Волка</option>
<option>Поножи Медведя</option>
<option>Поножи Тигра</option>
<option>Поножи Орла</option>
<option>Поножи Пантеры</option>
<option>Поножи Росомахи</option>
<option>Перстень Чёрного рыцаря</option>
<option>Перстень сглаза</option>
<option>Небесный перстень жизни</option>
<option>Огненный перстень</option>
<option>Серебряное кольцо</option>
<option>Перстень Белого рыцаря</option>
<option>Перстень Терпимости</option>
<option>Перстень короля</option>
<option>Перстень Рассудительности</option>
<option>Перстень Разрушителя</option>
<option>Щит учебный</option>
<option>Ледяной Щит</option>
<option>Щит Безразличия</option>
<option>Щит медный</option>
<option>Щит шипованый</option>
<option>Щит деревянный</option>
<option>Щит походный</option>
<option>Щит Возмездия</option>
<option>Щит Упорства</option>
<option>Огненный щит</option>
<option>Щит Измора</option>
<option>Щит Подавления</option>
<option>Лазурный щит</option>
<option>Щит Чёрного рыцаря</option>
<option>Щит солнца</option>
<option>Щит Ненависти</option>
<option>Щит Призрачный</option>
<option>Щит Белого рыцаря</option>
<option>Щит Поклонения</option>
<option>Щит Рассудка</option>
<option>Небесный щит</option>
<option>Щит платиновый</option>
<option>Изумрудный Щит</option>
<option>Щит Мертвеца</option>
<option>Щит Молнии</option>
<option>Щит демона</option>
<option>Щит отражения</option>
<option>Щит Рассудительности</option>
<option>Щит Терпимости</option>
<option>Щит Невозмутимости</option>
<option>Щит Могущества</option>
<option>Щит Террора</option>
<option>Щит Чести</option>
<option>Щит Владыки</option>
<option>Щит Зевса</option>
<option>Щит Перевоплощения</option>
<option>Щит Привидения</option>
<option>Щит Ветра</option>
<option>Щит Прозрения</option>
<option>Щит Забвения</option>
<option>Щит Созвездий</option>
<option>Щит Волка</option>
<option>Щит Медведя</option>
<option>Щит Пантеры</option>
<option>Щит Росомахи</option>
<option>Наручи Возмездия</option>
<option>Наручи Поклонения</option>
<option>Наручи Упорства</option>
<option>Наручи Безразличия</option>
<option>Наручи Достоинства</option>
<option>Наручи Измора</option>
<option>Наручи Мертвеца</option>
<option>Наручи Ненависти</option>
<option>Наручи Террора</option>
<option>Наручи Молнии</option>
<option>Наручи Терпимости</option>
<option>Наручи Чести</option>
<option>Наручи Боли</option>
<option>Наручи Доблести</option>
<option>Наручи Отваги</option>
<option>Наручи Невиновности</option>
<option>Наручи Рассудительности</option>
<option>Наручи Рассудка</option>
<option>Наручи Ледяные</option>
<option>Наручи Отказа</option>
<option>Наручи Подавления</option>
<option>Наручи Мужества</option>
<option>Наручи Призрака</option>
<option>Наручи Самурая</option>
<option>Наручи Владыки</option>
<option>Наручи Зевса</option>
<option>Наручи Привидения</option>
<option>Наручи Очарования</option>
<option>Наручи Перевоплощения</option>
<option>Наручи Юпитера</option>
<option>Наручи Ветра</option>
<option>Наручи Прозрения</option>
<option>Наручи Стихий</option>
<option>Наручи Забвения</option>
<option>Наручи Коварства</option>
<option>Наручи Созвездий</option>
<option>Наручи Волка</option>
<option>Наручи Медведя</option>
<option>Наручи Тигра</option>
<option>Наручи Орла</option>
<option>Наручи Пантеры</option>
<option>Наручи Росомахи</option>
</datalist>
<br>

<!-- Поле вода оставшегося времени (дней, часов) до окончания заклинания. Поле типа number. -->
<label for="days">Оставшийся срок заклятия:</label><br>
<input type="number" min="0" max="90" name="Form_2" id="days" size="1" maxlength="2" class="beg" placeholder="0-90" size="2" required/>Дней
<input type="number" min="0" max="23" name="Form_3" id="hours" size="1" maxlength="2" class="beg" placeholder="0-23" size="2" required/>Часов
<br>
<!-- Поле для ввода дополнительной информации, которая будет отображаться по данной вещи. Ограничено 250 символами. -->
<label for="comment"><p>Комментарий (любая информация, которая будет полезна вам при отображении данного предмета):</p></label>

<input class="input.text" type="text" name="Form_4" id="comment"maxlength="250" placeholder="Поле является необязательным для заполнения">
<input type="submit"> 
</form>
<br>

<!-- Получаем и обрабатываем данные, введенные пользователем -->
<!-- Передаем данные js в php -->
<!-- Подключаем скрипт работы с датой и временем -->

<script type="text/javascript">
	
	document.write ('Дата окончания:');
	document.write (+zaklOffDay);

</script>

<?php
if (isset($_POST['u_date']))
{
    echo $_POST['u_date'] . '</p>';
}

else
{
    echo "<script type='text/javascript'>";
    echo "document.write('<form method=\'post\'>');";
    echo "document.write('<p>Дата окончания:<br />');";
    echo "document.write('<input type=\'text\' name=\'u_date\' value = \'' + zaklOffDay + '\'</p>');";
    echo "document.write('<input type=\'submit\' />');";
    echo "document.write('</form>');";
    echo "</script>";

    exit();
}
?>

</body>
</html>