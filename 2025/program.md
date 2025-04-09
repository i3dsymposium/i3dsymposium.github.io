---
layout: default2025
title: Schedule
iana_timezone: "US/Eastern"
timezone: "UTC-4"
timezone_name: "EDT"

program_definition:
  - day: A date, in YYYY-MM-DD format
    video: Youtube url
    times: # These need to be sorted by time
      - time: "9:30" # time formatted as HH:MM, in quotes for the parser to not complain. This should be in 24-hour format, and it should convert automatically to am/pm for the people who use that, according to computer configuration.
        title: Title of the time slot
        link: Optional link to something, like papers.html#Papers1 for the first paper session
        chair: Optional name of the chair for this session
        registered_only: true/false, default false, specifies that the event is only for registered individuals. This was mainly used when the conference was online only, for poster presentations and social events
      - time: "17:00"
        endtime: true # Define this to true to set this time as the endtime of the day, it will not be shown in the list, it's because the title of each day includes a time interval, and to obtain that, the first and last times in the list of each day are used.

program:
  - day: 2025-05-07
    times:
      - time: "8:50"
        notes: Breakfast
      - time: "9:30"
        title: Opening Session
      - time: "9:45"
        title: "Keynote by Ken Perlin"
        link: "keynotes.html#ai-and-the-coming-xr"
      - time: "10:45"
        notes: break
      - time: "11:15"
        title: "Papers 1"
        #link: "papers.html#interaction-and-vr"
      - time: "12:55"
        notes: "Lunch"
      - time: "13:55"
        title: "Papers 2"
        #link: "papers.html#light-transport-and-storage"
      - time: "17:00"
        notes: TBD time and location of reception
      - time: "15:35"
        endtime: true

  - day: 2025-05-08
    times:
      - time: "8:20"
        notes: Breakfast
      - time: "9:00"
        title: "Papers 3"
      - time: "10:40"
        notes: break
      - time: "11:10"
        title: "ARM Industry Talk"
        link: "sponsored-talks.html#arm"
      - time: "11:30"
        title: "Posters Fast-Forward"
      - time: "12:00"
        notes: Lunch
      - time: "13:00"
        title: "Posters Session"
        #link: "posters.html"
      - time: "14:00"
        title: "Papers 4"
        #link: "papers.html#noise-and-reconstruction"
      - time: "18:00"
        notes: Banquet dinner
      - time: "15:40"
        endtime: true

  - day: 2025-05-09
    times:
      - time: "8:20"
        notes: Breakfast
      - time: "9:00"
        title: "Keynote by Chris Wyman"
        link: "keynotes.html#restir"
      - time: "10:00"
        notes: break
      - time: "10:30"
        title: "Papers 5"
        #link: "papers.html#efficient-forward-and-differentiable-rendering"
      - time: "12:10"
        notes: Lunch
      - time: "13:10"
        title: "Papers 6"
        #link: "papers.html#solvers-and-simulation"
      - time: "14:50"
        notes: break
      - time: "15:20"
        title: Closing & Awards
      - time: "15:35"
        title: Town Hall
      - time: "16:30"
        endtime: true
---

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}

This program is not definitive. The times and slot order listed here might change.

The conference will run from Wednesday 7th of May to Friday 9th of May 2025, in [Jersey City, NJ, USA](venue.html).

All times are United States Eastern Daylight Savings Time ({{ page.timezone_name }}, or {{ page.timezone }}).

{% for day in page.program %}

## {{ day.day | date: "%A, %e %B %Y" }}{% if day.video %}&nbsp;[![YouTube stream for Day {{ forloop.index }}](../img/youtube-link-logo.png){width="40px" style="vertical-align: text-bottom;"}]({{ day.video }}){:target="_blank"}{% endif %}
{: #program-day-{{forloop.index0}}}

{% if day.times and day.times.size > 0 %}

### <span class="time" data-day="{{ day.day }}">{{ day.times.first.time }}</span> to <span class="time" data-day="{{ day.day }}">{{ day.times.last.time }}</span> {{ page.timezone_name }}

{% endif %}

<table class="program times">
    {% for slot in day.times %}
    {% unless slot.endtime %}
    <tr>
        <td class="time" data-day="{{ day.day }}" valign="top" {% if slot.cancelled %}style="text-decoration:line-through;"{% endif %}>{{ slot.time }}</td>
        <td class="item">
            {% if slot.cancelled %}CANCELLED:&nbsp;{% endif -%}
            {% if slot.title %}
              {% if slot.link %}<a href="{{ slot.link }}">{{ slot.title }}</a>&nbsp;{% else %}{{ slot.title }}&nbsp;{% endif -%}
            {% endif -%}
            {% if slot.registered_only %}- <a href="attend.html">registration required</a>&nbsp;{% endif -%}
            {% if slot.link and slot.notes %}{% unless slot.title %}<a href="{{ slot.link }}">{% endunless %}{% endif -%}
              {% if slot.notes %}<i>{{ slot.notes }}</i>{% endif -%}
            {% if slot.link and slot.notes %}{% unless slot.title %}</a>{% endunless %}{% endif -%}
            {% if slot.chair -%}
              <span class="session-chair">Session chair: {{ slot.chair }}</span>
            {% endif %}
        </td>
    </tr>
    {% endunless %}
    {% endfor %}
</table>
{% endfor %}



<script src="../script/luxon.min.js"></script>
<script>
var times = document.getElementsByClassName("time");
Array.from(times).forEach(te => {
  var s = te.attributes["data-day"].value + " " + te.textContent;
  var t = luxon.DateTime.fromFormat(s, "yyyy-MM-dd H:mm", {zone:"{{page.iana_timezone}}"});
  var lt = t.toLocal();
  var lts =  lt.toLocaleString({ weekday: 'short', month: 'short', day: 'numeric', hour: 'numeric', minute: '2-digit', timeZoneName: 'short' });
  // Set the caption text on hover to the local time
  te.setAttribute("data-local-time", lts);
  te.setAttribute("title", lts);

  // Use AM/PM where appropriate according to the computer locale
  ts = t.toLocaleString(luxon.DateTime.TIME_SIMPLE);
  te.textContent = ts.toUpperCase()
});
</script>
