<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <main>
    <div class="contact-form__content">
        <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
        </div>
        <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <table class="form-table__inner">
            <tr class="form-table__row">
                <th class="form-table__header">お名前<span class="form__label--required">※</span></th>
                <td class="form-input__text">
                <input type="text" name="last-name" id="last-name" value="{{ old('last-name') }}" />
                </td>
                <td class="form-input__text">
                <input type="text" name="first-name" id="first-name" value="{{ old('first-name') }}" />
                </td>
                <div class="form__error">
                @error('last-name')
                {{ $message }}
                @enderror
                </div>
                <div class="form__error">
                @error('first-name')
                {{ $message }}
                @enderror
                </div>
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__header"></th>
                <td class="form-example__text">
                <span class="form-example__example">例）山田</span>
                </td>
                <td class="form-example__text">
                <span class="form-example__example">例）太郎</span>
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__header">性別<span class="form__label--required">※</span></th>
                <td colspan="2" class="form-table__text">
                <input type="radio" name="gender" value="男性" value="{{ old('gender') }}" checked />男性
                <input type="radio" name="gender" value="女性" value="{{ old('gender') }}" />女性
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__header">メールアドレス<span class="form__label--required">※</span></th>
                <td colspan="2" class="form-table__text">
                <input type="email" name="email" value="{{ old('email') }}" />
                <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
                </div>
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__header"></th>
                <td colspan="2" class="form-example__text">
                <span class="form-example__example">例）test@example.com</span>
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__header">郵便番号<span class="form__label--required">※</span></th>
                <td colspan="2" class="form-table__text">
                <input type="text" name="postcode" value="{{ old('postcode') }}" />
                <div class="form__error">
                @error('postcode')
                {{ $message }}
                @enderror
                </div>
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__header"></th>
                <td colspan="2" class="form-example__text">
                <span class="form-example__example">例）123-4567</span>
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__header">住所<span class="form__label--required">※</span></th>
                <td colspan="2" class="form-table__text">
                <input type="text" name="address" value="{{ old('address') }}" />
                <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
                </div>
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__header"></th>
                <td colspan="2" class="form-example__text">
                <span class="form-example__example">例）東京都渋谷区千駄ヶ谷1-2-3</span>
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__header">建物名</th>
                <td colspan="2" class="form-table__text">
                <input type="text" name="building_name" value="{{ old('building_name') }}" />
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__header"></th>
                <td colspan="2" class="form-example__text">
                <span class="form-example__example">例）千駄ヶ谷マンション101</span>
                </td>
            </tr>
            <tr class="form-table__row">
                <th class="form-table__header">ご意見<span class="form__label--required">※</span></th>
                <td colspan="2" class="form-table__text">
                <input type="text" name="opinion" value="{{ old('opinion') }}" />
                <div class="form__error">
                @error('opinion')
                {{ $message }}
                @enderror
                </div>
                </td>
            </tr>
            </table>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">確認</button>
        </div>
        </form>
    </div>
    </main>

</body>

</html>