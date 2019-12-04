<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Step1</title>
</head>
<body>
<h1>Step1</h1>

<?php echo validation_errors(); ?>
<?php echo form_open('form'); ?>
    <fieldset>
        <p class="attention">*は必須項目です</p>
        <table>
            <tbody>
                <tr>
                    <th>名前<span>*</span></th>
                    <td><input type="text" id="name" name="name" value="" /></td>
                </tr>
                <tr>
                    <th>カナ<span>*</span></th>
                    <td><input type="text" id="kana" name="kana" value="" /></td>
                </tr>
                <tr>
                    <th>メールアドレス<span>*</span></th>
                    <td><input type="text" id="email1" name="email" value="" />
                    @
                    <input type="text" name="email2" value="" /></td>
                </tr>
                <tr>
                    <th>性別<span>*</span></th>
                    <td>
                            <label for="male"><input type="radio" id="male" name="sex" value="male" checked />男</label>
                            <label for="female"><input type="radio" id="female" name="sex" value="female" />女</label>
                    </td>
                </tr>
                <tr>
                    <th>都道府県<span>*</span><br />
                    この中から選んでください</th>
                    <td>
                        <select id="pref" name="pref">
                                <option value="">---</option>
                                <option value="08">東京都</option>
                                <option value="09">茨城県</option>
                                <option value="10">栃木県</option>
                                <option value="11">群馬県</option>
                                <option value="12">埼玉県</option>
                                <option value="13">千葉県</option>
                                <option value="14">神奈川県</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <th>好きな麺類<span>*</span></th>
                    <td>
                            <label for="f1"><input type="checkbox" id="f1" name="fav" value="f1" checked>ラーメン</label>
                            <label for="f2"><input type="checkbox" id="f2" name="fav" value="f2">蕎麦</label>
                            <label for="f3"><input type="checkbox" id="f3" name="fav" value="f3">うどん</label>
                    </td>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <p class="submit"><input type="submit" value="送信"/></p>
</form>
</body>
</html>