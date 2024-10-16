<a class="back_top_line" href="#">
		<span>
			Наверх
		</span>
</a>

<!-- end hl_top -->
<!-- begin container_inner  -->
<div class="container_inner container_builder">

    <!-- begin edit_building  -->
    <div class="edit_building">
        <div class="wmain">
            <div class="edit_building_year">
                <ul class="edit_building_year_list">
                    <li><input type="text" value="2018"></li>
                </ul>
                <a class="edit_building_year_add" href="#"><span>Добавить год</span></a>
            </div>
            <ul class="edit_building_list">
                <li class="edit_building_list_act">
                    <div class="ebl_head">
                        <div class="ebl_year">
                            2017
                        </div>
                        <a href="#" class="ebl_del">
                            <span>Удалить год</span>
                        </a>
                    </div>
                    <div style="display: block;" class="ebl_content">
                        <div class="ebl_nav">
                            <select class="select_style">
                                <option>Выберите литер</option>
                                <option>Литер 1</option>
                                <option>Литер 2</option>
                                <option>Литер 3</option>
                                <option>Литер 4</option>
                                <option>Литер 5</option>
                            </select>
                            <a class="btn_main" href="#">Добавить месяц</a>
                            <div class="ebl_format">
                                Максимальный размер одного файла 2 Мб. Принимаются файлы jpg, gif, png
                            </div>
                        </div>
                        <div class="ebl_month">
                            <div class="ebl_month_name">
                                Март
                            </div>
                            <a class="ebl_month_del" href="#"><span>Удалить месяц</span></a>
                        </div>
                        <ul class="ebl_img_list">
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img1.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img2.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img3.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img4.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img2.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img3.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img3.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img1.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img4.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_add" href="#">
                                    <span>Загрузить фото</span>
                                </a>
                            </li>
                        </ul>
                        <div class="ebl_month">
                            <div class="ebl_month_name">
                                Февраль
                            </div>
                            <a class="ebl_month_del" href="#"><span>Удалить месяц</span></a>
                        </div>
                        <ul class="ebl_img_list">
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img1.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img2.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img3.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img4.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_add" href="#">
                                    <span>Загрузить фото</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php
                    foreach ($years as $year => $months) {
                ?>
                <div class="ebl_head">
                    <div class="ebl_year">
                        <?= $year; ?>
                    </div>
                    <a href="/delete/<?= $year; ?>" class="ebl_del">
                        <span>Удалить год</span>
                    </a>
                </div>
                <?php
                        foreach ($months as $month => $liters) {

                        }

                        echo "<div class='ebl_year'>$year</div>";

                        foreach ($months as $month) {
                            if ($month !== '.' && $month !== '..') {
                                echo "<div class='ebl_month_name'>" . getMonthName($month) . "</div>";

                                $images = glob("$baseDir/$year/$month/*.{jpg,png,gif}", GLOB_BRACE);
                                foreach ($images as $image) {
                                    echo "<img src='$image'>";
                                }
                            }
                        }
                    }
                ?>
                <li>
                    <div class="ebl_head">
                        <div class="ebl_year">
                            2016
                        </div>
                        <a href="#" class="ebl_del">
                            <span>Удалить год</span>
                        </a>
                    </div>
                    <div class="ebl_content">
                        <div class="ebl_nav">
                            <select class="select_style">
                                <option>Выберите литер</option>
                                <option>Литер 1</option>
                                <option>Литер 2</option>
                                <option>Литер 3</option>
                                <option>Литер 4</option>
                                <option>Литер 5</option>
                            </select>
                            <a class="btn_main" href="#">Добавить месяц</a>
                            <div class="ebl_format">
                                Максимальный размер одного файла 2 Мб. Принимаются файлы jpg, gif, png
                            </div>
                        </div>
                        <div class="ebl_month">
                            <div class="ebl_month_name">
                                Март
                            </div>
                            <a class="ebl_month_del" href="#"><span>Удалить месяц</span></a>
                        </div>
                        <ul class="ebl_img_list">
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img1.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img2.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img3.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img4.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img2.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img3.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img3.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img1.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img4.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_add" href="#">
                                    <span>Загрузить фото</span>
                                </a>
                            </li>
                        </ul>
                        <div class="ebl_month">
                            <div class="ebl_month_name">
                                Февраль
                            </div>
                            <a class="ebl_month_del" href="#"><span>Удалить месяц</span></a>
                        </div>
                        <ul class="ebl_img_list">
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img1.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img2.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img3.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_del" href="#"></a>
                                <img src="img/edit_building_img4.jpg">
                            </li>
                            <li>
                                <a class="ebl_img_add" href="#">
                                    <span>Загрузить фото</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- end edit_building -->
</div>