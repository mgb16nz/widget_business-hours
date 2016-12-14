<% if $BusinessHours %>
    <ul>
        <% loop $BusinessHours %>
            <li>
                <span>$WeekDay:</span>
                <span>$getTime($StartTime, $ClosetTime)</span>
            </li>
        <% end_loop %>
    </ul>
<% end_if %>
