---
layout: default2024
title: Papers Program

sessions_definition:
  - title: "Title for the session"
    chair: ""
    video: "Link to video, at the opening timestamp"
    papers:
      - title: "Paper title"
        authors: "Authors, all separated by commas"
        journal: "optionally, the acronym of the journal, such as jcgt"
        link: "DOI link"
        preprint: "link to the preprint provided by authors"
        presentation: "direct link to the presentation (with timestamp, if it's a short part of a long session)"
        thumbnail: "filename of the thumbnail, stored in the [year]/img/paper_thumbnails/ directory"
        abstract:  |
          some text here, can be multiline. If separated by a single line, it will be converted to <br>, otherwise it will be converted to separate <p> tags

sessions:
  - title: "Neural Rendering and Image Warping"
    chair: "Anton Kaplanyan, Intel"
    presentations_video: "https://youtu.be/5hg5orogFf4"
    papers:
      - title: "NeRFshop: Interactive Editing of Neural Radiance Fields"
        authors: "Clément Jambon, Bernhard Kerbl, Georgios Kopanas, Stavros Diolatzis, Thomas Leimkuehler, George Drettakis"
        preprint: "https://repo-sam.inria.fr/fungraph/nerfshop/"
        thumbnail: "01_01_clement_jambon.png"
        abstract: |
          Neural Radiance Fields (NeRFs) have revolutionized novel view synthesis for captured scenes, with recent methods allowing interactive free-viewpoint navigation and fast training for scene reconstruction. However, the implicit representations used by these methods — often including neural networks and complex encodings — make them difficult to edit. Some initial methods have been proposed, but they suffer from limited editing capabilities and/or from a lack of interactivity, and are thus unsuitable for interactive editing of captured scenes. We tackle both limitations and introduce NeRFshop, a novel end-to-end method that allows users to interactively select and deform objects through cage-based transformations. NeRFshop provides fine scribble-based user control for the selection of regions or objects to edit, semi-automatic cage creation, and interactive volumetric manipulation of scene content thanks to our GPU-friendly two-level interpolation scheme. Further, we introduce a preliminary approach that reduces potential resulting artifacts of these transformations with a volumetric membrane interpolation technique inspired by Poisson image editing and provide a process that distills the edits into a standalone NeRF representation.

      - title: "NeRFahedron: A Primitive for Animatable Neural Rendering with Interactive Speed"
        authors: "Zackary P. T. Sin, Peter H. F. Ng, Hong Va Leong"
        preprint: "https://zackarysin.github.io/NeRFahedron/"
        thumbnail: "01_02_zackary_sin.png"
        abstract: |
          Neural rendering is an exciting topic injecting machine learning methodologies into the classical computer graphics rendering pipeline. Although recent works have achieved remarkable fidelity, discussion on how to enable it for interactive scenarios like video games seems to be lacking. Aside from an editable 3D model and UV-mapping, an interactive application will demand the neural rendering to handle animatable 3D content with interactive speed. This is currently a gap in neural rendering and our solution to this problem is a novel neural rendering pipeline involving a primitive named NeRFahedron. It localizes a NeRF field and as such effectively reduces the number of expensive network sampling operations to improve speed. Our pipeline involves tetrahedron rasterization, localized ray marching and near-surface particle sampling. The result is a method that can enable animatable content for neural rendering with interactive speed, which has been shown to be competitive in rendering animation. We will also showcase its ability to enable interactive applications via a real-time demo.

      - title: "Metameric Inpainting for Image Warping"
        authors: "Rafael Kuffner dos Anjos, David Walton, Kaan Aksit, Sebastian Friston, David Swapp, Anthony Steed, Tobias Ritschel"
        journal: "tvcg"
        thumbnail: "01_03_rafael_kuffner.png"
        link: "https://ieeexplore.ieee.org/document/9928218"
        preprint: "https://discovery.ucl.ac.uk/id/eprint/10158438/1/09928218.pdf"
        abstract: |
          Image-warping, a per-pixel deformation of one image into another, is an essential component in immersive visual experiences such as virtual reality or augmented reality. The primary issue with image warping is disocclusions, where occluded (and hence unknown) parts of the input image would be required to compose the output image. We introduce a new image warping method, Metameric image inpainting - an approach for hole-filling in real-time with foundations in human visual perception. Our method estimates image feature statistics of disoccluded regions from their neighbours. These statistics are inpainted and used to synthesise visuals in real-time that are less noticeable to study participants, particularly in peripheral vision. Our method offers speed improvements over the standard structured image inpainting methods while improving realism over colour-based inpainting such as push-pull. Hence, our work paves the way towards future applications such as depth image-based rendering, 6-DoF 360 rendering, and remote render-streaming.

  - title: "Rendering and Sampling"
    chair: "Michal Iwanicki, Activision"
    presentations_video: "https://youtu.be/ntYMnq3-VcA"
    papers:
      - title: "Efficient Rendering for Light Field Displays using Tailored Projective Mappings"
        authors: "Laura Fink, Svenja Strobel, Linus Franke, Marc Stamminger"
        preprint: "https://github.com/lorafib/projs-for-lfd-rendering/blob/main/paper.pdf"
        thumbnail: "02_01_laura_fink.png"
        abstract: |
          A standard paradigm when rendering for parallax-based light field displays is to render multiple, slightly offset views first and to interweave these afterwards. In practice, more than 40 views of preferably high resolution need to be rendered per frame to achieve acceptable visual quality. The total amount of rendered pixels may consequently exceed the native resolution of the display by far. Increased memory consumption and sub-optimal render times are direct consequences.

          In this paper, we examine where pixels are “wasted” and present novel projective mappings for the virtual camera system that are custom tailored to such displays. Thus, we alleviate the aforementioned issues and show significant performance improvements regarding render time and memory consumption, while having only minor impact on visual quality. As we mainly touch the projective mapping of the virtual camera, our method is lean and can easily be integrated in existing rendering pipelines with minimal side effects.

      - title: "Barycentric Quad Rasterization"
        authors: "Jules Bloomenthal"
        journal: "jcgt"
        thumbnail: "02_02_jules_bloomenthal.png"
        link: "https://jcgt.org/published/0011/03/04/"
        preprint: "https://jcgt.org/published/0011/03/04/paper.pdf"
        live_only: true
        abstract: |
          When a quadrilateral is rendered as two triangles, a C1 discontinuity can occur along the dividing diagonal. In 2004, Hormann and Tarini used generalized barycentric coordinates to eliminate the discontinuity. The present paper provides an implementation using a geometry shader, unavailable in 2004, and provides additional examples of the barycentric technique.

      - title: "Efficient Spatial Resampling Using the PDF Similarity"
        authors: "Yusuke Tokuyoshi"
        preprint: "https://gpuopen.com/download/publications/Efficient_Spatial_Resampling_Using_the_PDF_Similarity.pdf"
        thumbnail: "02_03_yusuke_tokuyoshi.png"
        live_only: true
        abstract: |
          In real-time rendering, spatiotemporal reservoir resampling (ReSTIR) is a powerful technique to increase the number of candidate samples for resampled importance sampling. However, reusing spatiotemporal samples is not always efficient when target PDFs for the reused samples are dissimilar to the integrand. Target PDFs are often spatially different for highly detailed scenes due to geometry edges, normal maps, spatially varying materials, and shadow edges. This paper introduces a new method of rejecting spatial reuse based on the similarity of PDF shapes for single-bounce path connections (e.g., direct illumination). While existing rejection methods for ReSTIR do not support arbitrary materials and shadow edges, our PDF similarity takes them into account because target PDFs include BSDFs and shadows. In this paper, we present a rough estimation of PDF shapes using von Mises–Fisher distributions and temporal resampling. We also present a stable combination of our rejection method and the existing rejection method, considering estimation errors due to temporal disocclusions and moving light sources. This combination efficiently reduces the error around shadow edges with temporal continuities. By using our method for a ReSTIR variant that reuses shadow ray visibility for the integrand, we can reduce the number of shadow rays while preserving shadow edges.

  - title: "Points and Manipulation"
    chair: "Chris Wyman, NVIDIA"
    presentations_video: "https://youtu.be/07uwsNSr4f4"
    papers:
      - title: "Eye-Based Point Rendering for Dynamic Multiview Effects"
        authors: "Ajinkya Gavane, Benjamin Watson"
        preprint: "https://drive.google.com/file/d/1lp0pL7Rir9Nt2G0UikqbAvmNhPNy-A41/view"
        thumbnail: "03_01_ajinkya_gavane.png"
        abstract: |
          Eye-based point rendering (EPR) can make multiview effects much more practical by adding eye (camera) buffer resolution efficiencies to improved view-independent rendering (iVIR). We demonstrate this very successfully by applying EPR to dynamic cube-mapped reflections, sometimes achieving nearly 7× speedups over iVIR and traditional multiview rendering (MVR), with nearly equivalent quality. Our application to omnidirectional soft shad- ows is less successful, demonstrating that EPR is most effective with larger shader loads and tight eye buffer to off-screen (render target) buffer map- pings. This is due to EPR’s eye buffer resolution constraints limiting points and shading calculations to the sampling rate of the eye’s viewport. In a 2.48 million triangle scene with 50 reflective objects (using 300 off-screen views), EPR renders environment maps with a 49.40𝑚𝑠 average frame time on an NVIDIA 1080 Ti GPU. In doing so, EPR generates up to 5× fewer points than iVIR, and regularly performs 50× fewer shading calculations than MVR.

      - title: "Unpaired Translation of 3D Point Clouds with Multi-part Shape Representation"
        authors: "Chih-Chia Li, I-Chen Lin"
        preprint: "https://www.cs.nycu.edu.tw/~ichenlin/public/Li_MultiPartTrans_I3D23_preprint.pdf"
        thumbnail: "03_02_chih-chia_li.png"
        abstract: |
          Unpaired shape translation is an emerging task for intelligent shape modelling and editing. Recent methods for 3D shape transfer use single- or multi-scale latent codes but a single generator to generate the whole shape. The transferred shapes are prone to lose control of local details. To tackle the issue, we propose a parts-to-whole framework that employs multi-part shape representation to preserve structural details during translation. We decompose the whole shape feature into multiple part features in the latent space. These part features are then processed by individual generators respectively and transformed to point clouds. We constrain the local features of parts within the loss functions, which enable the model to generate more similar shape characteristics to the source input. Furthermore, we propose a part aggregation module that improves the performance when combining multiple point clusters to generate the final output. The experiments demonstrate that our multi-part shape representation can retain more shape characteristics compared to previous approaches.

      - title: "ManiLoco: A VR-Based Locomotion Method for Concurrent Object Manipulation"
        authors: "Dayu Wan, Xiaolei Guo, Jiahui Dong, Christos Mousas, Yingjie Chen"
        thumbnail: "03_03_dayu_wan.png"
        preprint: "https://web.ics.purdue.edu/~cmousas/papers/jour23-PACMCGIT-ManiLoco"
        abstract: |
          The use of virtual reality (VR) in laboratory skill training is rapidly increasing. In such applications, users often need to explore a large virtual environment within a limited physical space while completing a series of hand-based tasks (e.g., object manipulation). However, the most widely used controller-based teleport methods may conflict with the users’ hand operation and result in a higher cognitive load, negatively affecting their training experiences. To alleviate these limitations, we designed and implemented a locomotion method called ManiLoco to enable hands-free interaction and thus avoid conflicts and interruptions from other tasks. Users can teleport to a remote object’s position by taking a step toward the object while looking at it. We evaluated ManiLoco and compared it with state-of-the-art Point & Teleport in a within-subject experiment with 16 participants. The results confirmed the viability of our foot- and head-based approach and better support concurrent object manipulation in VR training tasks. Furthermore, our locomotion method does not require any additional hardware. It solely relies on the VR head-mounted display (HMD) and our implementation of detecting the user’s stepping activity, and it can be easily applied to any VR application as a plugin.

  - title: "Ray Tracing"
    chair: "Pete Shirley, Activision"
    presentations_video: "https://youtu.be/jurhq5ZnsBk"
    papers:
      - title: "Subspace Culling for Ray-Box Intersection"
        authors: "Atsushi Yoshimura, Takahiro Harada"
        preprint: "https://gpuopen.com/download/publications/I3D2023_SubspaceCulling_updated.pdf"
        thumbnail: "04_01_atsushi_yoshimura.png"
        abstract: |
          Ray tracing is an essential operation for realistic image synthesis. The acceleration of ray tracing has been studied for a long period of time because algorithms such as light transport simulations require a large amount of ray tracing. One of the major approaches to accelerate the intersections is to use bounding volumes for early pruning for primitives in the volume. The axis-aligned bounding box is a popular bounding volume for ray tracing because of its simplicity and efficiency. However, the conservative bounding volume may produce extra empty space in addition to its content. Especially, primitives that are thin and diagonal to the axis give false-positive hits on the box volume due to the extra space. Although more complex bounding volumes such as oriented bounding boxes may reduce more false-positive, they are computationally expensive. In this paper, we propose a novel culling approach to reduce false-positive hits for the bounding box by embedding a binary voxel data structure to the volume. As a ray is represented as a conservative voxel volume as well in our approach, the ray–voxel intersection is cheaply done by bitwise AND operations. Our method is applicable to hierarchical data structures such as bounding volume hierarchy (BVH). It reduces false-positive hits due to ray–box test and reduces the number of intersections during the traversal of BVH in ray tracing. We evaluate the reduction of intersections with several scenes and show the possibility of performance improvement by paying off the culling overhead. We also introduce a compression approach with a lookup table for our voxel data. We show our compressed voxel data archives significant false-positive reductions with a small amount of memory.


      - title: "Performance Comparison of Bounding Volume Hierarchies for GPU Ray Tracing"
        authors: "Daniel Meister, Jiří Bittner"
        journal: "jcgt"
        thumbnail: "04_02_daniel_meister.png"
        link: "https://jcgt.org/published/0011/04/01/"
        preprint: "https://jcgt.org/published/0011/04/01/paper.pdf"
        abstract: |
          Ray tracing is an inherent component of modern rendering algorithms. The bounding volume hierarchy (BVH) is a commonly used acceleration data structure employed in most ray tracing frameworks. Through the last decade, many methods addressing ray tracing with bounding volume hierarchies have been proposed. However, most of these methods were typically compared to only one or two reference methods. The acceleration provided by a particular BVH depends heavily on its construction algorithm. Even experts in the field dispute which method is the best. To add more insight into this challenge, we empirically compare the most popular methods addressing BVHs in the context of GPU ray tracing. Moreover, we combine the construction algorithms with other enhancements such as spatial splits, ray reordering, and wide BVHs. To estimate how close we are from the best performing BVH, we propose a novel method using global optimization with simulated annealing and combine it with the existing best-performing BVH builders. For the sake of fairness and consistency, all methods are evaluated in a single unified framework, and we make all source code publicly available. We also study the correlation between tracing times and the estimated traversal cost induced by the surface area heuristic (SAH).
    
      - title: "Accelerated Photon Mapping for Hardware-based Ray Tracing"
        authors: "René Kern, Felix Brüll, Thorsten Grosch"
        journal: "jcgt"
        thumbnail: "04_03_rene_kern.png"
        link: "https://jcgt.org/published/0012/01/01/"
        preprint: "https://jcgt.org/published/0012/01/01/paper.pdf"
        abstract: |
          Photon mapping is a numerical solution to the rendering equation based on tracing random rays. It works by first tracing the paths of the emitted light (photons) and storing them in a data structure to then collect them later from the perspective of the camera. Especially, the collection step is difficult to realize on the GPU due to its sequential nature. We present an implementation of a progressive photon mapper for ray tracing hardware (RTPM) based on a combination of existing techniques. Additionally, we present two small novel techniques that speed up RTPM even further by reducing the number of photons stored and evaluated. We demonstrate that RTPM outperforms existing hash-based photon mappers, especially on large and complex scenes.

      - title: "Importance-Based Ray Strategies for Dynamic Diffuse Global Illumination"
        authors: "Zihao Liu, Jing Huang, Allan Rocha, Jim Malmros, Jerry Zhang"
        preprint: "https://allenliuzihao.github.io/IS-DDGI/"
        thumbnail: "04_04_zihao_liu.png"
        abstract: |
          In this paper, we propose a first and efficient ray allocation technique for Dynamic Diffuse Global Illumination (DDGI) using Multiple Importance Sampling (MIS). Our technique, IS-DDGI, extends DDGI by incorporating a set of importance-based ray strategies that analyze, allocate, and manage ray resources on the GPU. We combine these strategies with an adaptive historical and temporal frame-to-frame analysis for an effective reuse of information and a set of GPU-based optimizations for speeding up ray allocation and reducing memory bandwidth. Our IS-DDGI achieves similar visual quality to DDGI with a speedup of 1.27x to 2.47x in total DDGI time and 3.29x to 6.64x in probes ray tracing time over previous technique [29]. Most speedup of IS-DDGI comes from probes ray tracing speedup.

  - title: "Neural Denoising and Motion"
    chair: "Christoph Schied, NVIDIA"
    presentations_video: "https://youtu.be/__CZNR0zRN0"
    papers:
      - title: "Joint Neural Denoising of Surfaces and Volumes"
        authors: "Nikolai Hofmann, Jon Hasselgren, Jacob Munkberg"
        preprint: "https://research.nvidia.com/publication/2023-03_joint-neural-denoising-surfaces-and-volumes"
        thumbnail: "05_01_nikolai_hofmann.png"
        abstract: |
          Denoisers designed for surface geometry rely on noise-free feature guides for high quality results. However, these guides are not readily available for volumes. Our method enables combined volume and surface denoising in real time from low sample count (4 spp) renderings. The rendered image is decomposed into volume and surface layers, leveraging spatio-temporal neural denoisers for both components. The individual signals are composited using learned weights and denoised transmittance. Our architecture outperforms current denoisers in scenes containing both surfaces and volumes, and produces temporally stable results at interactive rates.

      - title: "Pixel-wise Guidance for Utilizing Auxiliary Features in Monte Carlo Denoising"
        authors: "Kyu Beom Han, Olivia Odenthal, Woo Jae Kim, Sung-Eui Yoon"
        preprint: "https://sgvr.kaist.ac.kr/~kbhan/I3D23_GuideMCD/"
        thumbnail: "05_02_kyu_beom_han.png"
        abstract: |
          Auxiliary features such as geometric buffers (G-buffers) and path descriptors (P-buffers) have been shown to significantly improve Monte Carlo (MC) denoising. However, recent approaches implicitly learn to exploit auxiliary features for denoising, which could lead to insufficient utilization of each type of auxiliary features. To overcome such an issue, we propose a denoising framework that relies on an explicit pixel-wise guidance for utilizing auxiliary features. First, we train two denoisers, each trained by a different auxiliary feature (i.e., G-buffers or P-buffers). Then we design our ensembling network to obtain per-pixel ensembling weight maps, which represent pixel-wise guidance for which auxiliary feature should be dominant at reconstructing each individual pixel and use them to ensemble the two denoised results of our denosiers. We also propagate our pixel- wise guidance to the denoisers by jointly training the denoisers and the ensembling network, further guiding the denoisers to focus on regions where G-buffers or P-buffers are relatively important for denoising. Our result and show considerable improvement in denoising performance compared to the baseline denoising model using both G-buffers and P-buffers. The source code is available at https://github.com/qbhan/GuidanceMCDenoising.

      - title: "An Interactive Framework for Visually Realistic 3D Motion Synthesis using Evolutionarily-trained Spiking Neural Networks"
        authors: "Ioannis Polykretis, Aditi Patil, Mridul Aanjaneya, Konstantinos Michmizos"
        preprint: "https://rutgers.box.com/shared/static/hc1bpabykp3tpyhhvlo3glb9gmzr6rln.pdf"
        thumbnail: "05_03_ioannis_polykretis.png"
        abstract: |
          We present an end-to-end method for capturing the dynamics of 3D human characters and translating them for synthesizing new, visually-realistic motion sequences. Conventional methods employ sophisticated, but generic, control approaches for driving the joints of articulated characters, paying little attention to the distinct dynamics of human joint movements. In contrast, our approach attempts to synthesize human-like joint movements by exploiting a biologically-plausible, compact network of spiking neurons that drive joint control in primates and rodents. We adapt the controller architecture by introducing learnable components and propose an evolutionary algorithm for training the spiking neural network architectures and capturing diverse joint dynamics. Our method requires only a few samples for capturing the dynamic properties of a joint’s motion and exploits the biologically-inspired, trained controller for its reconstruction. More importantly, it can transfer the captured dynamics to new visually-plausible motion sequences. To enable user-dependent tailoring of the resulting motion sequences, we develop an interactive framework that allows for editing and real-time visualization of the controlled 3D character. We also demonstrate the applicability of our method to real human motion capture data by learning the hand joint dynamics from a gesture dataset and using our framework to reconstruct the gestures with our 3D animated character. The compact architecture of our joint controller emerging from its biologically-realistic design, and the inherent capacity of our evolutionary learning algorithm for parallelization, suggest that our approach could provide an efficient and scalable alternative for synthesizing 3D character animations with diverse and visually-realistic motion dynamics.


  - title: "Dynamics"
    chair: "Omer Shapira, NVIDIA"
    presentations_video: "https://youtu.be/m8rggUd7cAQ"
    papers:
      - title: "G2 Blending Ball B-Spline Curve by B-Spline"
        authors: "Yuming Zhao, Zhongke Wu, Xingce Wang"
        preprint: "https://aidenzhao.github.io/paper/i3d_ball_b_spline_blending.pdf"
        thumbnail: "06_01_yuming_zhao.png"
        abstract: |
          Blending two Ball B-Spline Curves(BBSC) is an important tool in modeling tubular objects. In this paper, we propose a new BBSC blending method. Our method has the following three main contributions: First, we use BBSC instead of ball Bézier to model the blending part to expand the solution space and make the resultant BBSC have better fairness. Second, we consider both the skeleton line and radius of BBSC, which makes the skeleton line and radius consistent. Thirdly, we propose a two-step optimization process to solve the problem of excessive amount of parameters brought by expanding the solution space, so that our method satisfies the real-time.

      - title: "Fast Position-based Multi-Agent Group Dynamics"
        authors: "Tomer Weiss"
        preprint: "https://www.dropbox.com/s/m82rdjep062jxsl/main_v6_camera_ready.pdf"
        thumbnail: "06_02_tomer_weiss.png"
        abstract: |
          We present a novel method for simulating groups moving in formation. Recent approaches for simulating group motion operate via forces or velocity-connections. While such approaches are effective for several cases, they do not easily scale to large crowds, irregular formation shapes, and they provide limited fine-grain control over agent and group behaviors. In this paper we propose a novel approach that addresses these difficulties via positional constraints, with a position-based dynamics solver. Our approach allows real-time, interactive simulation of a variety of group numbers, formation shapes, and scenarios of up to thousands of agents.

      - title: "Real-Time Sand Dune Simulation"
        authors: "Brennen Taylor, John Keyser"
        preprint: "https://drive.google.com/file/d/1ffQ5xWHgPiaisvW5dX4eqQyZ1rWlx44u/view"
        thumbnail: "06_03_brennen_taylor.png"
        abstract: |
          We present a novel real-time method for simulating aeolian sand transport and dune propagation. Our method is a GPU-based extension of the Desertscapes Simulation sand propagation model to additionally capture echo dunes and obstacle interaction. We validate our method by comparing it against an existing study of echo dune evolution in a wind tunnel environment. Additionally, we demonstrate the significantly improved performance of our method via comparison to the existing, CPU-based method. Lastly, we validate our method by comparing it to a published study exploring the evolution of dunes in a bidirectional wind environment driven by an offline, cellular autonoma based method. We conclude that the presented method is a simple and helpful tool for users in multiple domains who wish to capture physically plausible desertscape evolution in real time.

      - title: "Differentiable Curl-Noise: Boundary-Respecting Procedural Incompressible Flows Without Discontinuities"
        authors: "Xinwen Ding, Christopher Batty"
        preprint: "https://cs.uwaterloo.ca/~c2batty/papers/Ding2023/Differentiable_Curl_Noise.pdf"
        thumbnail: "06_04_xinwen_ding.png"
        abstract: |
          We present Differentiable Curl-Noise, a C1 procedural method to animate strictly incompressible fluid flows in two dimensions. While both the original Curl-Noise method of Bridson et al. [2007] and a recent modification by Chang et al. [2022] have been used to design incompressible flow fields, they often suffer from non-smoothness in their handling of obstacles, owing in part to properties of the underlying Euclidean distance function or closest point function. We therefore propose a differentiable scheme that modulates the background potential in a manner that respects arbitrary solid simple polygonal objects placed at any location, without introducing discontinuities. We demonstrate that our new method yields improved flow fields in a set of two dimensional examples, including when obstacles are in close proximity or possess concavities.

---

* This bulletpoint is necessary for kramdown to generate the ToC
{:toc}


# THIS PAGE IS FOR 2023, HERE ONLY FOR TESTING PURPOSES

*Links to the published papers in the journal will be published soon.*

Over the past three decades, the ACM SIGGRAPH Symposium on Interactive 3D Graphics and Games has showcased exceptional progress from academic and industrial research covering all aspects of interactive computer graphics.

This year, we continue a track record of excellence with 16 high-quality papers selected by the international paper committee for publication and presentation at the conference.

Conference papers will appear in <a href="https://dl.acm.org/loi/pacmcgit" target="_blank">PACM CGIT</a> after the conference. We have requested authors to provide preprint links as possible until then. Refresh this page periodically, or use <a href="https://www.hongkiat.com/blog/detect-website-change-notification/" target="_blank">a web page monitoring tool</a>, to check this page for updates.


### Invited papers
The program also includes 3 papers originally published in the <a href="http://jcgt.org/" target="_blank">Journal of Computer Graphics Techniques</a> (JCGT) and 1 paper from the <a href="https://ieeexplore.ieee.org/xpl/RecentIssue.jsp?punumber=2945" target="_blank">IEEE Transactions on Visualization and Computer Graphics</a> (TVCG).


{% for session in page.sessions %}

# Papers {{ forloop.index }}: {{ session.title }}
{: #Papers{{ forloop.index }}}

- {% if session.chair %}Session chair: {{ session.chair }}{% endif %}
{% assign presentations_video = session.presentations_video | strip -%}
{%- assign qa_video = session.qa_video | strip -%}
{%- if presentations_video != empty -%}
- [Watch Video]({{ session.presentations_video }}){: .button target="_blank"}
{%- endif %}
{: .unstyled }


{% for paper in session.papers %}
{%- comment %}<!-- This next tag is absolutely horrendous but it is the only thing that seems to work to handle newlines in a nice way. Basically, we convert markdown to html, and then we ensure after any newline there are two spaces, so that the dd will not be broken -->{% endcomment -%}
{%- if paper.abstract -%}{%- assign abstract = paper.abstract | strip | escape_once | markdownify | replace: "
", "
  " %}{% endif %}

{{ paper.title }}
{%- comment %}<!-- Authors of the paper, separated by comma, with an "and" between the last two -->{% endcomment %}
: {% assign authors = paper.authors | escape_once | split: ", " %}{% for author in authors %}{%if forloop.last and forloop.first == false %} and {% elsif forloop.first == false %}, {% endif %}{{ author }}{% endfor %}

{%- comment %}<!-- Links and meta info for the paper: original journal, doi, preprint, video presentation -->{% endcomment %}
: {% assign journal = paper.journal | strip -%}
  {%- comment %}<!-- journal and "live presentation only" -->{% endcomment -%}
  {%- if journal != empty or paper.live_only -%}
  ({% if journal != empty %}invited {{ journal | upcase }} paper presentation{%if paper.live_only %}, {% endif %}{% endif -%}
  {%- if paper.live_only %}live presentation only{% endif %}) {% endif -%}

  {%- comment %}<!-- links, separated by commas -->{% endcomment -%}
  {%- assign link = paper.link | strip -%}
  {%- assign preprint = paper.preprint | strip -%}
  {%- assign presentation = paper.presentation | strip -%}
  {%- if link != empty -%}
  <a href="{{ link }}">link</a>{% if preprint != empty or presentation != empty %}, {% endif -%}
  {%- endif -%}
  {%- if preprint != empty -%}
  <a href="{{ preprint }}">preprint</a>{% if presentation != empty %}, {% endif -%}
  {%- endif -%}
  {%- if presentation != empty -%}
  <a href="{{ presentation }}">presentation</a>{%- endif %}

{%- comment %}<!-- Abstract and thumbnail -->{% endcomment %}

: {% if paper.abstract or paper.thumbnail -%}
  <details>
  {%- if paper.abstract %}
  <summary>Abstract</summary>

  {{ abstract }}

  {%- endif -%}
  {%- if paper.thumbnail %}
  <img src="img/paper_thumbnails/{{ paper.thumbnail }}" class="paper-thumbnail">
  {% endif -%}
  </details>
  {%- endif %}
{% endfor %}

{%unless forloop.last %}
---
{% endunless %}

{% endfor %}
