    <ul>
        <% loop $BusinessHours %>
        <li>
            <span>$WeekDay</span>
            <span>$OpenTime.Nice - $CloseTime.Nice</span>
        </li>
        <% end_loop %>
    </ul>
