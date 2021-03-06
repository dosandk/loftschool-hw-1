<article class="contacts">
    <header class="contacts-header">
        <div class="contacts-header-title-table display-table">
            <div class="display-table-cell vertical-align-middle">
                У вас интересный проект? Напишите мне
            </div>
        </div>
        <div class="header-bottom-border">&nbsp;</div>
    </header>

    <div class="contact-form-wrapper">
        <form id="contact-form">
            <section class="contact-form-fields-group">
                <fieldset class="fieldset">
                    <div class="display-table fixed-table-layout parent-size">
                        <div class="display-table-cell parent-half-width">
                            <div>
                                <label class="form-label" for="user-name">Имя</label>
                            </div>
                            <div class="relative">
                                <input id="user-name" class="form-input" name="userName" placeholder="Как к Вам обращаться" type="text"/>
                                <div class="error-wrapper"></div>
                            </div>
                        </div>
                        <div class="display-table-cell two-col-gag">&nbsp;</div>
                        <div class="display-table-cell parent-half-width">
                            <div>
                                <label class="form-label" for="user-email">Email</label>
                            </div>
                            <div class="relative">
                                <input id="user-email" class="form-input" name="userEmail" placeholder="Куда мне писать" type="email"/>
                                <div class="error-wrapper right"></div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="fieldset">
                    <div>
                        <label class="form-label" for="user-message">Сообщение</label>
                    </div>
                    <div class="relative">
                        <textarea id="user-message" class="form-taxtarea contacts-textarea" name="userMessage" placeholder="Кратко в чем суть"></textarea>
                        <div class="error-wrapper"></div>
                    </div>
                </fieldset>
                <fieldset class="fieldset">
                    <div>
                        <label class="form-label" for="capture-code">Введите код, указанный на картинке</label>
                    </div>
                    <div class="display-table fixed-table-layout parent-width">
                        <div class="display-table-cell vertical-align-middle parent-half-width">
                            <div class="capture-container">

                            </div>
                        </div>
                        <div class="display-table-cell two-col-gag">&nbsp;</div>
                        <div class="display-table-cell vertical-align-middle parent-half-width">
                            <div class="relative">
                                <input id="capture-code" class="form-input" name="captureCode" placeholder="Введите код" type="text"/>
                                <div class="error-wrapper right"></div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </section>
            <footer>
                <div class="display-table parent-size">
                    <div class="display-table-cell parent-half-width to-left-inline">
                        <input class="contact-form-btn contact-form-submit" value="Отправить" type="submit"/>
                    </div>
                    <div class="display-table-cell parent-half-width to-right-inline">
                        <input class="contact-form-btn contact-form-reset" value="Очистить" type="reset"/>
                    </div>
                </div>
            </footer>
        </form>
    </div>
</article>