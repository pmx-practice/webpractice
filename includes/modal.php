<div class="modal fade" id="askQuestionModal" tabindex="-1" aria-labelledby="askQuestionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="askQuestionModalLabel">Задайте свой вопрос</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="askQuestionForm">
                    <div class="mb-3">
                        <label for="userName" class="form-label">Ваше имя:</label>
                        <input type="text" class="form-control" id="userName" placeholder="Введите ваше имя" required>
                    </div>
                    <div class="mb-3">
                        <label for="userPhone" class="form-label">Ваш телефон:</label>
                        <input type="tel" class="form-control" id="userPhone" placeholder="+373 (__) ___-____" required>
                        <!-- Убираем атрибут pattern -->
                    </div>
                    <div class="mb-3">
                        <label for="userAnswer" class="form-label">Ваш вопрос:</label>
                        <textarea class="form-control" id="userAnswer" placeholder="Что бы вы хотели узнать?" rows="3" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="submit" form="askQuestionForm" class="btn btn-primary">Отправить</button>
            </div>
        </div>
    </div>
</div>
