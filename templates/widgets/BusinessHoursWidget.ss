    <ul>
        <% loop $BusinessHours %>
            <li>
                <p>loop</p>
                <span>$WeekDay</span>
                <span>$OpenTime - $CloseTime</span>
            </li>
        <% end_loop %>
        <li>
            <p>Non loop</p>
            <span>Monday</span>
            <span>9am - 6pm</span>
        </li>

    </ul>


<p>This is my widget</p>