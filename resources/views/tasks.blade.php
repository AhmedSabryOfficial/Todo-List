<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @include('partials.navbar')
    <div class="container mx-auto p-4">
        <div class="w-[70%] mx-auto">
            <div class="mb-4 flex items-center space-x-2 justify-center">
                <input type="text"
                    class="border border-gray-300 rounded p-2 bg-gray-200 w-full focus:border-transparent focus:outline-none"
                    placeholder="Add a Task">
                <button id="addTaskBtn"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Add
                </button>
            </div>
            <ul id="taskList" class="space-y-2">
                <!-- مثال على مهمة واحدة -->
                <li class="flex items-center justify-between p-2 rounded transform duration-100 hover:bg-gray-100">
                    <div class="flex items-center space-x-2">
                        <!-- دائرة الحالة (يمكن تغيير لونها عند اكتمال المهمة) -->
                        <span class="w-4 h-4 rounded-full bg-gray-300 hover:bg-green-400"
                            onclick="markComplete(this)"></span>
                        <!-- عنوان المهمة (قابل للنقر لفتح نافذة التعديل) -->
                        <span class="task-title cursor-pointer border-l-2 border-transparent pl-2 hover:border-blue-500"
                            data-task-id="1" onclick="openModal()">مثال على
                            المهمة</span>
                    </div>
                </li>
            </ul>
        </div>


    </div>

    <div id="editModal" class="fixed top-[55px] right-0 w-80 h-full bg-white shadow-lg p-4 z-50 hidden">
        <div class="bg-white rounded p-4 w-80">
            <h2 class="text-xl font-semibold mb-4">تعديل المهمة</h2>
            <!-- حقل تعديل اسم المهمة -->
            <input type="text" id="editTaskTitle" class="border border-gray-300 rounded p-2 w-full mb-4">
            <div class="flex justify-end space-x-2">
                <!-- زر إلغاء -->
                <button id="cancelEditBtn"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded"
                    onclick="closeModal()">
                    إلغاء
                </button>
                <!-- زر حفظ التعديل -->
                <button id="saveEditBtn"
                    class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">
                    حفظ
                </button>
                <!-- زر حذف المهمة -->
                <button id="deleteTaskBtn"
                    class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                    حذف
                </button>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('editModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        function markComplete(el) {
            el.classList.toggle('bg-green-400');
        }
    </script>






</body>

</html>
