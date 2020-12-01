<?php
    $pageTitle = 'Events - TNT Events Inc.';
 
    include('includes/header.html.php');

    $_SESSION['event-date-1'] = $_POST['event-date-1'];
?>
<main>
    <section class="events-content">
        <div class="calendar-banner">
            <div class="flex-around calendar-month-selector">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 444.531 444.531" style="enable-background:new 0 0 444.531 444.531;" xml:space="preserve">
                    <g>
                        <path d="M213.13,222.409L351.88,83.653c7.05-7.043,10.567-15.657,10.567-25.841c0-10.183-3.518-18.793-10.567-25.835
                            l-21.409-21.416C323.432,3.521,314.817,0,304.637,0s-18.791,3.521-25.841,10.561L92.649,196.425
                            c-7.044,7.043-10.566,15.656-10.566,25.841s3.521,18.791,10.566,25.837l186.146,185.864c7.05,7.043,15.66,10.564,25.841,10.564
                            s18.795-3.521,25.834-10.564l21.409-21.412c7.05-7.039,10.567-15.604,10.567-25.697c0-10.085-3.518-18.746-10.567-25.978
                            L213.13,222.409z"/>
                    </g>
                </svg>
                <p>Prev.</p>
            </div>
            <h2>December 2020</h2>
            <div class="flex-around calendar-month-selector">
                <p>Next</p>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 444.819 444.819" style="enable-background:new 0 0 444.819 444.819;" xml:space="preserve">
                    <g>
                        <path d="M352.025,196.712L165.884,10.848C159.029,3.615,150.469,0,140.187,0c-10.282,0-18.842,3.619-25.697,10.848L92.792,32.264
                            c-7.044,7.043-10.566,15.604-10.566,25.692c0,9.897,3.521,18.56,10.566,25.981l138.753,138.473L92.786,361.168
                            c-7.042,7.043-10.564,15.604-10.564,25.693c0,9.896,3.521,18.562,10.564,25.98l21.7,21.413
                            c7.043,7.043,15.612,10.564,25.697,10.564c10.089,0,18.656-3.521,25.697-10.564l186.145-185.864
                            c7.046-7.423,10.571-16.084,10.571-25.981C362.597,212.321,359.071,203.755,352.025,196.712z"/>
                    </g>
                </svg>
            </div>
        </div>
        <div class="calendar">
            <div class="calendar-header">
                <ul>
                    <li>Sunday</li>
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                    <li>Saturday</li>
                </ul>
            </div>
            <div class="calendar-body">
                <div class="calendar-cell cell-1"></div>
                <div class="calendar-cell cell-2"></div>
                <div class="calendar-cell cell-3"><p>1</p></div>
                <div class="calendar-cell cell-4"><p>2</p></div>
                <div class="calendar-cell cell-5"><p>3</p></div>
                <div class="calendar-cell cell-6"><p>4</p></div>
                <div class="calendar-cell cell-7"><p>5</p></div>
                <div class="calendar-cell cell-8">
                    <p>6</p>
                    <p class="calendar-event" id="next-event">Craft Event: 8am-5pm</p>
                </div>
                <div class="calendar-cell cell-9"><p>7</p></div>
                <div class="calendar-cell cell-10"><p>8</p></div>
                <div class="calendar-cell cell-11"><p>9</p></div>
                <div class="calendar-cell cell-12"><p>10</p></div>
                <div class="calendar-cell cell-13"><p>11</p></div>
                <div class="calendar-cell cell-14"><p>12</p></div>
                <div class="calendar-cell cell-15"><p>13</p></div>
                <div class="calendar-cell cell-16"><p>14</p></div>
                <div class="calendar-cell cell-17"><p>15</p></div>
                <div class="calendar-cell cell-18"><p>16</p></div>
                <div class="calendar-cell cell-19">
                    <p>17</p>
                    <p class="calendar-event" onclick="chooseNextEvent()">Craft Event: 8am-2pm</p>
                    <p class="calendar-event" onclick="chooseNextEvent()">Craft Event: 4pm-8pm</p>
                </div>
                <div class="calendar-cell cell-20"><p>18</p></div>
                <div class="calendar-cell cell-21"><p>19</p></div>
                <div class="calendar-cell cell-22"><p>20</p></div>
                <div class="calendar-cell cell-23"><p>21</p></div>
                <div class="calendar-cell cell-24"><p>22</p></div>
                <div class="calendar-cell cell-25"><p>23</p></div>
                <div class="calendar-cell cell-26"><p>24</p></div>
                <div class="calendar-cell cell-27"><p>25</p></div>
                <div class="calendar-cell cell-28"><p>26</p></div>
                <div class="calendar-cell cell-29">
                    <p>27</p>
                    <p class="calendar-event" onclick="chooseNextEvent()">Craft Event: 8am-5pm</p>
                </div>
                <div class="calendar-cell cell-30"><p>28</p></div>
                <div class="calendar-cell cell-31"><p>29</p></div>
                <div class="calendar-cell cell-32"><p>30</p></div>
                <div class="calendar-cell cell-33"><p>31</p></div>
                <div class="calendar-cell cell-34"><p class="next-month-text">1</p></div>
                <div class="calendar-cell cell-35"><p class="next-month-text">2</p></div>
                <div class="calendar-cell cell-36"><p class="next-month-text">3</p></div>
                <div class="calendar-cell cell-37"><p class="next-month-text">4</p></div>
                <div class="calendar-cell cell-38"><p class="next-month-text">5</p></div>
                <div class="calendar-cell cell-39"><p class="next-month-text">6</p></div>
                <div class="calendar-cell cell-40"><p class="next-month-text">7</p></div>
                <div class="calendar-cell cell-41"><p class="next-month-text">8</p></div>
                <div class="calendar-cell cell-42"><p class="next-month-text">9</p></div>
            </div>
        </div>
    </section>
    <section id="calendar-modal">
        <div id="faded-background"></div>
        <div id="modal-window">
            <div class="modal-header">
                <h3>Event Date: December 6th, 2020</h3>
                <h4>Time: 8am - 5pm</h4>
                <p>Location: Gateway to the Villages</p>
            </div>
            <div class="modal-body">
                <p>This event is held in veterans Park at the corner of FL-100 and A1A directly across the street from the Atlantic ocean. Flagler Beach is between Daytona Beach and St. Augustine just south of Palm Coast.</p>
                <p>There is a large variety of artists and crafters, metal work, paintings, photography, glass work, jewelry, nautical woodwork, and clothing. </p>
            </div>
            <div id="close">
                <svg viewBox="0 0 365.696 365.696" xmlns="http://www.w3.org/2000/svg"><path d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"/></svg>
            </div>
            <div class="modal-footer">
                <button class="button blue" id="add-to-calendar">Add to Calendar</button>
                <form action="login.php" name="event-modal" method="post">
                    <input type="text" name="event-date-1" value="December 6th">
                    <input type="submit" value="Register Now" class="button blue">
                </form>
            </div>
        </div>
    </section>
</main>
<?php 
    include('includes/footer.html.php');
?>