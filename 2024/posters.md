---
layout: default2024
title: Posters Program

two_thirds_content: true

fast_forward_video: "https://youtu.be/HuYNWNllmcA"

posters_definition:
  - title: "Poster title"
    authors: "Authors, all separated by commas"
    preprint: "link to the preprint provided by authors"
    abstract:  |
      some text here, can be multiline. If separated by a single line, it will be converted to <br>, otherwise it will be converted to separate <p> tags

posters:
  - title: "Conservation-Aware Learned Shallow Water Simulation with Differentiable Solvers"
    authors: "Naoyuki Hirasawa, Takashi Kanai and Ryoichi Ando"
    abstract: |
      This paper presents a novel model for accurate and conservative shallow water simulations on low-resolution computational grids. Our approach combines a convolutional neural network (CNN), a differentiable shallow water equations solver, and a rescaling layer for the velocity and height field. Through end-to-end training on high-resolution simulations, our model achieves a reduction in numerical diffusion during long-term simulations compared to conventional methods, which consist of semi-Lagrangian advection and implicit gravity term integration. Furthermore, by introducing a new rescaling layer, our model not only strictly conserves fluid volume and total energy, but also accelerates the training. During the inference stage, the CNN and the rescaling layer account for only a small part of the total computation time, facilitating efficient implementation with low overhead.

  - title: "Real-time Curls"
    authors: "Matheus de Moraes Cavazotti and André Luiz Pires Guedes"
    abstract: |
      This is a work-in-progress that proposes a method to simulate curly hair with its spring-like characteristics in real-time, while maintaining the strand inextensibility. By using the position-based simulation framework and expanding on previous works on the same topic, a new constraint is devised to keep the curls shape.

  - title: "A Unified Approach to Collision Detection Using Signed Distances on Vertices and Edges"
    authors: "Tomoyo Kikuchi and Takashi Kanai"
    abstract: |
      We introduce a unified collision detection method for closed and open surfaces. Methods of discrete collision detection (DCD) have been proposed to address collisions missed by continuous collision detection (CCD). However, handling general collisions, including sharp impacts and edge-edge contacts has been challenging. Recent proposed methods avoid these issues, but they require updates of the scalar fields. In this study, we propose a simple DCD method that utilizes vertex-based signed distances. By incorporating the concept of descent methods, we also enable corrections for edge penetrations. Finally, we demonstrate the robustness of our study with several examples. 

  - title: "Improved G-buffer for Denoising Path Traced Rendering"
    authors: "Jia-Wun Jhang and Chun-Fa Chang"
    abstract: |
      Monte Carlo Path Tracing produces photo-realistic 3D rendering but often requires a denoising pass in practice to achieve interactive frame rates. We propose an improved G-buffer scheme that obtains more geometric information from ray tracing pipeline to tackle the problems in existing denosing methods which often blur the details on mirror-like reflection and glass-like refraction. In real-time path tracing, our method could generate low-noise images from as low as one sample per pixel. In our evaluation using SSIM, our method shows 30% to 50% improvements compares to SVGF, a well-known path tracing denoising method.

  - title: "A Comprehensive Approach to VR-Based Anti-Bullying Education"
    authors: "Anabel Nolasco, Mary Vrahimis and Lubomir Ivanov"
    abstract: |
      We present a comprehensive VR-based educational environment for training young children to recognize and deal with bullying situations. The simulation keeps track of the free, non-scripted verbal exchange between the participant and the virtual bully or bullies as well as other factors such as the user's facial expression, eye-contact, and social distance to the bully. All of these factors are used to compute the overall user score, which determines the outcome of each training simulation.

  - title: "Real-Time Scene Reconstruction using Light Field Probes"
    authors: "Yaru Liu, Derek Nowrouzezahrai and Morgan McGuire"
    abstract: |
      Reconstructing photo-realistic large-scale scenes from images, for example at city scale, is a long-standing problem in computer graphics. Neural rendering is an emerging technique that enables photo-realistic image synthesis from previously unobserved viewpoints; however, state-of-the-art neural rendering methods have difficulty efficiently rendering a high complex large-scale scene because these methods typically trade scene size, fidelity, and rendering speed for quality. The other stream of techniques utilizes scene geometries for reconstruction. But the cost of building and maintaining a large set of geometry data increases as scene size grows.
      
      Our work explores novel view synthesis methods that efficiently reconstruct complex scenes without explicit use of scene geometries. Specifically, given sparse images of the scene (captured from the real world), we reconstruct intermediate, multi-scale, implicit representations of scene geometries. In this way, our method avoids explicitly relying on scene geometry, significantly reducing the computational cost of maintaining large 3D data. Unlike current methods, we reconstruct the scene using a probe data structure. Probe data hold highly accurate depth information of dense data points, enabling the reconstruction of highly complex scenes. By reconstructing the scene using probe data, the rendering cost is independent of the complexity of the scene. As such, our approach combines geometry reconstruction and novel view synthesis. Moreover, when rendering large-scale scenes, compressing and streaming probe data is more efficient than using explicit scene geometry. Therefore, our neural representation approach can potentially be applied to virtual reality (VR) and augmented reality (AR) applications. 

  - title: "Position-based Torso Crowds"
    authors: "Bilas Talukdar, Tomer Weiss and Yunhao Zhang"
    abstract: |
      We propose a novel crowd simulation method that represents crowd agents as 2D capsules rather than traditional discs, offering a more accurate approximation of human body profiles. While discs are commonly used due to their simplicity, a disc overestimates the actual profile and orientation of crowd agents, and therefore misses intrinsic dynamic details of crowds in various settings. Leveraging position-based dynamics (PBD), we simulate crowds capsule-shaped agents in multiple settings. e propose innovative constraints for multi-agent navigation with capsules, enhancing the fidelity and applicability of crowd simulations in diverse environments and scenarios.


---

The following posters are expected to be presented during the conference's posters session. We will include links to them after the conference as provided by the authors.

{% if page.fast_forward_video -%}
[Watch Fast-Forward Video]({{page.fast_forward_video}}){: .button target="_blank"}
{%- endif %}


{: .papers-list }
{% for poster in page.posters %}
{%- comment %}<!-- This next tag is absolutely horrendous but it is the only thing that seems to work to handle newlines in a nice way. Basically, we convert markdown to html, and then we ensure after any newline there are two spaces, so that the dd will not be broken -->{% endcomment -%}
{%- if poster.abstract -%}{%- assign abstract = poster.abstract | strip | escape_once | markdownify | replace: "
", "
  " %}{% endif %}

{{ poster.title }}
{%- comment %}<!-- Authors of the poster, separated by comma, with an "and" between the last two -->{% endcomment %}
: {% assign authors = poster.authors | escape_once | split: ", " %}{% for author in authors %}{%if forloop.last and forloop.first == false %} and {% elsif forloop.first == false %}, {% endif %}{{ author }}{% endfor %}

{%- comment %}<!-- Links for the poster -->{% endcomment %}
: {% assign journal = paper.journal | strip -%}
  {%- comment %}<!-- links, separated by commas -->{% endcomment -%}
  {%- assign preprint = poster.preprint | strip -%}
  {%- if preprint != empty -%}
  <a href="{{ preprint }}">preprint</a>{% if presentation != empty %}, {% endif -%}
  {%- endif %}

{%- comment %}<!-- Abstract and thumbnail -->{% endcomment %}

: {% if poster.abstract -%}
  <details>
  <summary>Abstract</summary>

  {{ abstract }}

  </details>
  {%- endif %}
{% endfor %}


