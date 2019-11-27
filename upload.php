  <form class="w3-center mobi" action="login.php" enctype="multipart/form-data" method="post">
    <label for="heading" style="font-size: 15pt;">خبر درج کریں: </label>
    <label class="fa fa-calendar w3-xlarge dateclass"><input type="date" name="date" style="display: none" /></label>
    <label class="w3-button w3-circle w3-black"><b>+</b><input type="file" name="page1" value="+" style="display: none" /></label>
    <label class="w3-button w3-circle w3-black"><b>+</b><input type="file" name="page2" value="+" style="display: none" /></label>
    <label class="w3-button w3-circle w3-black"><b>+</b><input type="file" name="page3" value="+" style="display: none" /></label>
    <label class="w3-button w3-circle w3-black"><b>+</b><input type="file" name="page4" value="+" style="display: none" /></label>
    <b><input class="w3-btn w3-blue w3-round-xxlarge" type="submit" name="upload" value="درج کریں" /></b>
  </form>

  <form class="w3-center mobi-show" action="login.php" enctype="multipart/form-data" method="post">
    <label for="heading" style="font-size: 15pt;">خبر درج کریں: </label><i class="fa fa-calendar w3-xlarge dateclass"></i><br />
    <input type="date" name="date" /><br />
    <label class="w3-button w3-circle w3-black"><b>+</b><input type="file" name="page1" value="+" style="display: none" /></label>
    <label class="w3-button w3-circle w3-black"><b>+</b><input type="file" name="page2" value="+" style="display: none" /></label>
    <label class="w3-button w3-circle w3-black"><b>+</b><input type="file" name="page3" value="+" style="display: none" /></label>
    <label class="w3-button w3-circle w3-black"><b>+</b><input type="file" name="page4" value="+" style="display: none" /></label><br />
    <b><input class="w3-btn w3-blue w3-round-xxlarge" type="submit" name="upload" value="درج کریں" /></b>
  </form>
</section>

<footer class="w3-row-padding w3-card w3-center">
  <form class="changepass" action="login.php" method="post" style="margin-bottom: 45px;">
    <h3>اپنا پاسورڈ تبدیل کریں</h3>
    <label for="oldpass" class="w3-third w3-text-blue" style="font-size: 20px;"><b>پرانا پاسورڈ: </b></label>
    <input class="w3-third w3-input w3-border" type="password" name="oldpass" placeholder="پرانا پاسورڈ" />
    <label for="newpass" class="w3-third w3-text-blue" style="font-size: 20px;"><b>نیا پاسورڈ: </b></label>
    <input class="w3-third w3-input w3-border" type="password" name="newpass" placeholder="نیا پاسورڈ" />
    <b><input class="w3-btn w3-blue w3-round-xxlarge" type="submit" name="changepass" value="تبدیل کریں" /></b>
  </form>
</footer>
