<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tiny.cloud/1/m3wr5i4ctl7yuevq4aveu9ablgi8jynf2mqp90aweythp7aw/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
</head>
<body>
    
    <form action="{{route('user-blog')}}" method="POST" class="pt-6 w-[70rem] mx-auto">
        @csrf
        <input type="text" name="user_id" id="user_id" value="{{ $data->id}}" class="hidden">
        <input type="text" name="user_name" id="user_name" value="{{ $data->name}}" class="hidden">
        <input type="text" name="user_email" id="user_email" value="{{ $data->email}}" class="hidden">
        <input type="text" name="blog_status" id="blog_status" value="Review" class="hidden">
        <input type="text" name="blog" id="blog" class="blog w-80">
        <div class=" flex justify-end">
            <button class="py-2 px-6 rounded-lg m-6 bg-blue-600 border text-white">Submit</button>
        </div>
    </form>
    

    <script>
        tinymce.init({
            selector: 'input.blog',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
</body>
</html>

</x-app-layout>

