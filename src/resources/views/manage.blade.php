<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/manage.css') }}">
</head>
<body>
    <div class="contact-form__heading">
        <h2>管理システム</h2>
    </div>

    <main>

    <div class="contact__content">
    <form class="search-form" action="/manage/search" method="get">
    @csrf
    <div class="search-form__item">
        <input class="search-form__item-input" type="text" name="keyword" value="{{ old('keyword') }}" >
    </div>

    <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">検索</button>
    </div>
</form>


    <div class="manage-table">
    <table class="manage-table__inner">
        <tr class="manage-table__row">
        <th class="manage-table__header">ID</th>
        <th class="manage-table__header">お名前</th>
        <th class="manage-table__header">性別</th>
        <th class="manage-table__header">メールアドレス</th>
        <th class="manage-table__header">ご意見</th>
        </tr>
        @foreach ($contact as $contact)
        <tr class="manage-table__row">
            <td class="manage-table__item">
                {{ $contact->id }}
            </td>
            <td class="manage-table__item">
                {{ $contact->fullname }}
            </td>
            <td class="manage-table__item">
                {{ $contact->gender }}
            </td>
            <td class="manage-table__item">
                {{ $contact->email }}
            </td>
            <td class="manage-table__item">
                {{ $contact->opinion }}
            </td>
            <form class="delete-form" action="/manage/delete" method="POST">
            @method('DELETE')
            @csrf
            <td class="delete-form__button">
                <input type="hidden" name="id" value="{{ $contact->id }}">
                <button class="delete-form__button-submit" type="submit">削除</button>
            </td>
            </form>
        </tr>

        @endforeach
    </table>
    </div>
</div>
    </main>
</body>

</html>