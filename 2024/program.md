---
layout: default2024
title: Schedule
iana_timezone: "US/Pacific"
timezone: "UTC-7"
timezone_name: "PT"

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
  - day: 2023-05-03
    times:
      - time: "8:30"
        notes: Breakfast
      - time: "9:00"
        title: Opening Session
      - time: "9:15"
        title: "Keynote 1: Peter Hedman, Google"
        link: "keynotes.html#Keynote1"
      - time: "10:15"
        notes: break
      - time: "10:45"
        chair: "Anton Kaplanyan, Intel"
        title: "Papers 1: Neural Rendering and Image Warping"
        link: "papers.html#Papers1"
      - time: "12:15"
        notes: "Lunch"
      - time: "13:15"
        title: "Papers 2: Rendering and Sampling"
        chair: "Michal Iwanicki, Activision"
        link: "papers.html#Papers2"
      - time: "14:45"
        title: "Posters Fast-Forward"
      - time: "14:55"
        title: "Posters Session"
        link: "posters.html"
      - time: "18:00"
        notes: "Reception dinner"
        link: "venue.html#ReceptionVenue"
      - time: "16:00"
        endtime: true
  - day: 2023-05-04
    times:
      - time: "8:30"
        notes: Breakfast
      - time: "9:15"
        title: "Keynote 2: Natalya Tatarchuk, Unity"
        link: "keynotes.html#Keynote2"
      - time: "10:15"
        notes: break
      - time: "10:45"
        title: "Papers 3: Points and Manipulation"
        chair: "Chris Wyman, NVIDIA"
        link: "papers.html#Papers3"
      - time: "12:15"
        notes: Lunch
      - time: "13:15"
        title: "Papers 4: Ray Tracing"
        chair: "Pete Shirley, Activision"
        link: "papers.html#Papers4"
      - time: "15:15"
        title: Town Hall
      - time: "18:00"
        notes: Banquet dinner
        link: "venue.html#BanquetVenue"
      - time: "16:00"
        endtime: true
  - day: 2023-05-05
    times:
      - time: "8:30"
        notes: Breakfast
      - time: "9:15"
        title: "Keynote 3: Marco Salvi, NVIDIA"
        link: "keynotes.html#Keynote3"
      - time: "10:15"
        notes: break
      - time: "10:45"
        title: "Papers 5: Neural Denoising and Motion"
        chair: "Christoph Schied, NVIDIA"
        link: "papers.html#Papers5"
      - time: "12:15"
        notes: Lunch
      - time: "13:15"
        title: "Papers 6: Dynamics"
        chair: "Omer Shapira, NVIDIA"
        link: "papers.html#Papers6"
      - time: "15:15"
        notes: break
      - time: "15:30"
        title: Closing
      - time: "16:00"
        endtime: true
---

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}


# THIS PAGE IS FOR 2023, HERE ONLY FOR TESTING PURPOSES

The conference will run from Wednesday, 3rd of May to Friday, 5th of May 2023, in [Bellevue, WA, USA](venue.html). We will prepare the detailed program when we have the full list of papers that will be presented. Times and details shown here are due to change in the following weeks.

All times are United States Pacific Time ({{ page.timezone_name }}, or {{ page.timezone }}).

{% for day in page.program %}

## {{ day.day | date: "%A, %e %B %Y" }}{% if day.video %}&nbsp;[![YouTube stream for Day {{ forloop.index }}](../img/youtube-link-logo.png){width="40px" style="vertical-align: text-bottom;"}]({{ day.video }}){:target=_blank}{% endif %}
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
