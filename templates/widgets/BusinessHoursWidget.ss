    <ul>
        <% loop $BusinessHours %>
        <li>
            <!-- the businesshours loop hope to get working -->
            <span>$WeekDay</span>
            <span>$OpenTime - $CloseTime</span>
        </li>
        <% end_loop %>

        <li>
            <!-- businesshours non loop to show how should look like -->
            <span>Monday</span>
            <span>9am - 6pm</span>
        </li>

    </ul>

<p>This is my widget</p>