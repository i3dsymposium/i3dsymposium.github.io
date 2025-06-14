---
layout: default2025
title: Posters Program

two_thirds_content: true

#fast_forward_video: ""

posters_definition:
  - title: "Poster title"
    authors: "Authors, all separated by commas"
    preprint: "link to the preprint provided by authors"
    doi: "link to doi"
    abstract:  |
      some text here, can be multiline. If separated by a single line, it will be converted to <br>, otherwise it will be converted to separate <p> tags


posters:
- title: "3D Label Layout with Binocular Optimization"
  authors: "Zijie Zheng, Yu He, Ge Yu, Xi Xu"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728377"
  abstract: |
    Clear label layouts are essential for effectively presenting information and annotating complex objects in 3D virtual environments. However, conventional methods often fail to address double vision caused by binocular disparity and rely on discrete updates, leading to inconsistent layout quality when the viewpoint shifts.
    
    To overcome these limitations, this paper introduces a force-driven binocular 3D dynamic label layout approach with continuous updates, ensuring real-time adjustments to enhance visual clarity. A user study demonstrates that our method enables faster label reading than baseline approaches, particularly as label density increases.


- title: "A Framework for Collaborative Augmented Reality Applications"
  authors: "Gustavo Adolfo Murillo Gutierrez, Rong Jin, Juan Pablo Ignacio Ramirez Paredes, Uriel Haile Hernández Belmonte"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728390"
  abstract: |
    This paper presents an open-source framework to simply the deployment and setup of co-located collaborative Augmented Reality (AR) experiences on mobile devices. It uses a centralized client-server architecture, with a single PC acting as a local server to handle data communication and synchronization across multiple mobile devices. This framework eliminates the reliance on cloud anchor services or third-party platforms that often come with restrictive limitations. The framework's performance was evaluated through a controlled indoor multi-user drawing activity, measuring interaction latency and data applicability under varying data loads.


- title: "BlendFusion: Procedural 3D Texturing Assistant with View-Consistent Generative Models"
  authors: "Qinchan Li, Finley Torrens, Qi Sun, Kenneth Chen"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728376"
  abstract: |
    Modeling 3D assets is a universal in various applications, including animation and game development. However, a key challenge lies in the labor-intensive task of 3D texturing, where creators must repeatedly update textures to align with modified geometric shapes on the fly. This iterative workflow makes 3D texturing significantly more cumbersome and less efficient than 2D image painting.
    
    To address this, we introduce BlendFusion, an interactive framework that leverages generative diffusion models to streamline 3D texturing. Unlike existing systems that generate textures from scratch, BlendFusion integrates the procedural nature of texturing by incorporating multi-view projection to guide the generation process, enhancing stylistic alignment with the creator's intent. Experimental results demonstrate the robustness and consistency of BlendFusion across both objective and subjective evaluations.


- title: "Creating Patterns with Distance Functions & Voronoi Diagrams"
  authors: "Jhovani Gallardo Moreno, Michael Wehar"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728384"
  abstract: |
    We investigate how varying the distance function used in the construction of Voronoi Diagrams can create unique tilings and repeated patterns. We consider classical distance functions such as Euclidean and Manhattan as well as novel distance functions leading to variants of classical spaces and traditional patterned designs.


- title: "Evaluating Speech and Video Models for Face-Body Congruence"
  authors: "Kiran Chhatre, Renan Guarese, Andrii Matviienko, Christopher Peters"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728374"
  abstract: |
    Animations produced by generative models are often evaluated using objective quantitative metrics that do not fully capture perceptual effects in immersive virtual environments.
    
    To address this gap, we present a preliminary perceptual evaluation of generative models for animation generation conducted through a VR-based user study (N=48). Our study investigates how human perception aligns with deep learning–derived metrics, focusing on animation congruency—ensuring that the generated facial expressions and body gestures are both congruent with and synchronous to the driving speech. We evaluated two state-of-the-art generative methods, assessing their ability to produce congruent facial expressions and body gestures. Our findings reveal that such congruency can significantly improve interaction quality. By integrating VR-based perceptual feedback into training pipelines, our work offers a method for creating more engaging virtual characters. 


- title: "Exploring Tangible and Graphical Interfaces for Large Virtual Object Manipulation"
  authors: "Keru Wang, Pincun Liu, Ken Perlin"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728389"
  abstract: |
    Manipulating large virtual objects in extended reality (XR) environments poses challenges due to scale, occlusion, and interaction precision.
    
    This work presents a system design and a comparative study of two interfaces for large-object manipulation: a tangible user interface (TUI) using 3D-printed Opti-Tracked miniatures, and a 2D graphical user interface (GUI) minimap. We deployed the system at SIGGRAPH ASIA 2024 with a floor-planning scenario and collected feedback from over 100 participants. Results show that TUI enhances spatial awareness and collaboration, while GUIs support more focused layout planning with greater precision. Our findings highlight trade-offs between tangible and graphical interfaces, suggesting hybrid approaches for improved usability in large-scale XR environment arrangement tasks.


- title: "Extended PBR Materials in Image Composition"
  authors: "Yu Guo, Zhiqiang Lao, Heather Yu"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728386"
  abstract: |
    Realistic image synthesis is a challenge problem. The learning-based approach is easy to use but lacks physical consistency, while traditional Physically Based Rendering (PBR) offers high realism but is computationally expensive. Intrinsic representation offers a well-balanced trade-off, decomposing images into fundamental components (intrinsic channels) such as geometry, materials, and illumination for controllable synthesis. However, existing PBR materials struggle with complex surface models, particularly high-specular and transparent surfaces.
    
    In this work, we extend intrinsic representations to incorporate both reflection and transmission properties, enabling the synthesis of transparent materials such as glass and windows. We propose an explicit intrinsic compositing framework that provides deterministic, interpretable image synthesis.


- title: "Generalized TensoRF: Efficient Multi-Scene Radiance Fields and View-Consistent 3D Editing"
  authors: "Achleshwar Luthra, Jingyu Shi, Xiyun Song, Zongfang Lin, Heather Yu"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728385"
  abstract: |
    Neural Radiance Fields (NeRF) enable high-fidelity 3D reconstruction but suffer from per-scene optimization and long training times. Tensorial Radiance Fields (TensoRF) improve efficiency but still require per-scene training.
    
    We introduce Generalized Tensorial Radiance Fields (GTensoRF), a framework that learns multiple scenes simultaneously, achieving scalability and efficiency. GTensoRF trains on 100 scenes in 60 minutes on a single GPU, whereas NeRF requires 24+ hours per scene. Additionally, GTensoRF enables view-consistent, semantically meaningful 3D editing through optimized tensor components and density-based resampling. Evaluated on the Photoshapes dataset, GTensoRF significantly improves multi-scene generalization and efficiency over existing methods, including EditNeRF, which requires 48 hours per scene.


- title: "Generative MCHa Map: Simplify Haptic Design with Fine-Tuned Variational Autoencoder"
  authors: "Hongyu Liu, Zhenyu Gu"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728379"
  abstract: |
    Rendering realistic haptic feedback for virtual surface materials is a key challenge in haptic interaction. In environments like games, creating haptic feedback that matches visual textures requires significant effort and expertise. Visual textures provide height and roughness information, which can be used to generate haptic maps aligned with texture pixels.
    
    We propose micro-collision haptic (MCHa) maps, where vibration intensity and frequency parameters are derived from texture features and stored in MCHa map channels. This allows developers to use haptic maps like visual texture maps and supports real-time, interactive vibrotactile feedback. Additionally, we fine-tuned the Variational Autoencoder (VAE) of Stable Diffusion to generate visual texture and matching MCHa maps simultaneously. A user study (N=18) showed that MCHa maps improved texture details recognition accuracy and were preferred by participants for vibrotactile feedback. Our approach offers an efficient, user-friendly method for designing high-fidelity surface haptic feedback for low-cost mobile devices, improving haptic experiences in virtual environments.


- title: "Interactive Control On Time Perception via Seeing, Hearing and Thinking in 3D VR Games"
  authors: "Jingyi Song, Zhitao Liu, Jinkai Zhang, Ning Xie, Chengruoxi Wang, Yu Wu"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728378"
  abstract: |
    Time perception is crucial in VR experiences, directly affecting immersion and gameplay design.
    
    This study examines how interactive control influences time perception through vision, hearing, and cognitive load. The results show that high-sensitivity colors, familiar music, low cognitive loads, and the high attention level can accelerate the perceived duration through 3 experiments. These results provide insights for designers to enhance player experience.


- title: "Intuitive Remote Exploration with a Head-Controlled Quadrupedal Robot Avatar in Virtual Reality"
  authors: "Jeff K.T. Tang, Anthony Kong, Albert Alexander Jacobsz"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728387"
  abstract: |
    This study investigates the development of a telepresence system that based on open-source technologies such as the Robot Operating System (ROS) to allow users to interact with distant environments. The system includes a quadruped robot with a stereoscopic camera for immersive experiences and was created in response to the increased demand for remote operations during the COVID-19 pandemic. Users reported a high level of physical comfort and a generally positive perception of the experience, reflecting an 80% success rate in locating objects during interactions. Improvements to response times and camera quality were suggested by participants. The system’s versatility positions it for applications in fields like deep space exploration, providing a scalable and economical solution. The findings also highlight the system’s potential to improve remote exploration tasks and elder care applications.


- title: "Mid-Air Sketching for Interactive Terrain Authoring"
  authors: "Yang Zhou, Wentao Chen, Xinyu Zhang, Yashan Xiang, Mingyu Zhai, Kun Zhao, Jie Liu, Guihuan Feng, Bin Luo"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728380"
  abstract: |
    In this paper, we present a terrain modeling approach based on mid-air sketching. Users can outline the key spatial features of the terrain with the assistance of sparse 3D strokes. This approach can generate digital elevation models based on 3D sketches, giving non- artists the freedom to create personalized terrains. Experiments demonstrate that the proposed approach has significant advantages in creative freedom and artistic control in some scenarios. Finally, we hope that the approach in this paper can provide a new idea for the automatic generation of 3D content.


- title: "ReSTIR PT with MCMC Decoupled Shading"
  authors: "Fei Lee, Chun-Fa Chang"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728381"
  abstract: |
    We propose a MCMC decoupled shading method that works alongside the original ReSTIR PT process to produce better-converged images without requiring additional rays. By exploiting the structural similarity between ReSTIR PT and MCMC methods, we treat each candidate path generated within ReSTIR PT as if it were spawned using a Markov chain, interpreting spatiotemporal reuses as mutations. This approach allows energy transfer and deposition between pixels, effectively extracting more information from each candidate path within the ReSTIR PT procedure. As a result, our method enhances stratification, reduces correlation, and achieves a more converged output compared to the original ReSTIR PT.


- title: "Stochastic Lightcuts for Reflective Shadow Maps"
  authors: "Goanghun Kim, Yesol Yun, Hyeong-Seok Ko"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728375"
  abstract: |
    In this research, we introduce the stochastic lightcuts for reflective shadow maps (RSMSLC), which is designed for real-time one-bounce diffuse indirect illumination. Our method organizes virtual point lights of the reflective shadow map (RSM) into a perfect binary tree, like Lin and Yuksel’s work. But it minimizes cumbersome virtual lights clustering process with a pyramid-like manner, still maintaining substantial spatial coherence. This compact data structure significantly enhances the efficiency of storing and sampling.


- title: "SUKI+: System for Unified Kinematic Input, General Purpose Kinematic Input Convertor"
  authors: "Yiyang Shang, Sasan Bahrami, Paul Diefenbach"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728388"
  abstract: |
    SUKI+, a motion-based input framework, enhances digital interactions for users with diverse physical abilities. Originally developed for rehabilitation, it enables real-time movement control remapping without modifying game code. SUKI+ integrates Dynamic Difficulty Adjustment (DDA) using kinematic and biometric data to dynamically adjust difficulty based on user performance and engagement. A pilot study with 11 stroke patients showed improved engagement, suggesting its potential for scalable, adaptive solutions in rehabilitation, accessibility-focused gaming, and interactive training.


- title: "V2M-DGO: Multi-Dimensional Adaptation Framework for Efficient Volumetric Video Multicasting"
  authors: "Ruonan Chai, Dirk Kutscher"
  doi: "https://dl.acm.org/doi/10.1145/3722564.3728382"
  abstract: |
    Traditional multicast approaches struggle to accommodate users' dynamic fields of view (FoV), heterogeneous devices, and fluctuating network conditions, leading to inefficient bandwidth utilization and degraded Quality of Experience (QoE).
    
    To address these challenges, we propose V2M-DGO, a reinforcement learning-based framework that optimizes user grouping and layered content delivery. V2M-DGO leverages multi-dimensional dynamic grouping to enhance multicast efficiency while minimizing computational overhead. It integrates V-PCC 3D video coding for layered content generation and employs Proximal Policy Optimization (PPO) to learn adaptive grouping and resource allocation strategies in an offline setting. For synchronized and resilient transmission, V2M-DGO utilizes Common Media Application Format (CMAF), Manifest alignment, and a fast rollback mechanism to mitigate network fluctuations. Additionally, knowledge distillation enables a lightweight model that preserves performance while reducing computational costs. With its scalable design, V2M-DGO significantly improves QoE and bandwidth efficiency, making it a promising solution for future volumetric video streaming.



---

The following posters were presented during the conference's posters session. They are published in the ACMDL as the [Companion Proceedings of I3D](https://dl.acm.org/doi/proceedings/10.1145/3722564)

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
  {%- assign doi = poster.doi | strip -%}
  {%- if preprint != empty -%}
  <a href="{{ preprint }}">preprint</a>{% if doi != empty %}, {% endif -%}
  {%- endif %}
  {%- if doi != empty -%}
  <a href="{{ doi }}">DOI link</a>
  {%- endif %}

{%- comment %}<!-- Abstract and thumbnail -->{% endcomment %}

: {% if poster.abstract -%}
  <details>
  <summary>Abstract</summary>

  {{ abstract }}

  </details>
  {%- endif %}
{% endfor %}


