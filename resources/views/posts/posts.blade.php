<form action="{{route('article')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="category">Категорія</label>
        <input type="text" name="category" placeholder="" id="category" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Заголовок</label>
        <input type="text" name="title" placeholder="" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="calendar">Виберіть дату:</label>
        <input id="calendar" type="date" name="calendar" max="2022-01-24" min="2010-01-01" >
    </div>
    <div class="form-group">
        <label for="description">Опис</label>
        <input type="text" name="description" placeholder="" id="description" class="form-control">
    </div>
    <div class="form-group">
        <label for="image">Зображення</label>
        <input type="file" id="image"  name="image">
    </div>
    <input type="submit" value="Publish" class="publishblock">
</form>
