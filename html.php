
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="utf-8" /> 
    <title>Tree Task</title>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <script type="text/javascript" src="res/jquery.min.js"></script>
    <script type="text/javascript" src="res/scrollTo.js"></script>
    <script type="text/javascript" src="res/scroll.js"></script>
    </head>
    
    <body> 
        <div class="section-1 section">
            <div class="mainTitle" style="display:none;">
            Tree Task
            <div class="secondTitle" style="display:none;">
            The nested task manager for everyone
            </div>
            </div>
            
            <div class="scrollText" style=" display:none;">
            V Scroll V
            </div>
        </div>
        <div class="section-2 section">
        </div>
        <div class="section-3 section">
        </div>
        <div class="section-4 section">
        </div>
        
        <div class="pageWrapper">
            <div class="pageContent">
                
                <div class="navBox" id="navBox">
                    
                    <div class="navHead">
                        <img alt="icon" class="smallIcon" src="res/tticon50px.png"/>
                        <div class="title">
                            Tree Task
                        </div>
                    </div>
                    
                    <a class="clickable" onclick="$(document).scrollTo('.box-1', 500)">
                        <div class="navItem nav-1">
                            <div class="navItemBody">Home</div>
                        </div>
                    </a>
                    
                    <a class="clickable" onclick="$(document).scrollTo('.box-2', 500)">
                        <div class="navItem nav-2">
                            <div class="navItemBody">Video</div>
                        </div>
                    </a>
                    
                    <a class="clickable" onclick="$(document).scrollTo('.box-3', 500 )">
                        <div class="navItem nav-3">
                            <div class="navItemBody">FAQ</div>
                        </div>
                    </a>
                    
                    <a class="clickable" onclick="$(body).scrollTo('.box-4', 500 )">
                        <div class="navItem nav-4">
                            <div class="navItemBody">Downloads</div>
                        </div>
                    </a>
                    
                    <a class="clickable" onclick="$(body).scrollTo('.box-5', 500 )">
                        <div class="navItem nav-5">
                            <div class="navItemBody">Developers</div>
                        </div>
                    </a>
                    
                    <a class="clickable" onclick="$(body).scrollTo('.box-6', 500 )">
                        <div class="navItem nav-6">
                            <div class="navItemBody">Changelog</div>
                        </div>
                    </a>
                    <a class="clickable" onclick="$(body).scrollTo('.box-7', 500 )">
                        <div class="navItem nav-7">
                            <div class="navItemBody">About</div>
                        </div>
                    </a>
                </div>
                
                <div class="spaceFix"></div>
                <div class="contentBox box-1">
                    <div class="pageTitle">
                    Home
                    </div>
                    <div class="divider">
                    </div>
                    <div class="content">
                        <p>Tree Task is an open source nested task manager for Android</p>
                        <h3>Features</h3>
                        <ul>
                            <li>create nested tasks (like to-do lists inside to-do lists)</li>
                            <li>tasks may also be used as notes (50k characters per task description)</li>
                            <li>export tasks to any other app (email, text message...)</li>
                            <li>archive for finished tasks</li>
                            <li>sort tasks in any order you like</li>
                            <li>progress tracking by calculating completion of all sub-tasks.</li>
                            <li>full tree view mode - visualize the entire tree and jump to any task</li>
                        </ul>
                        <h3>Description</h3>
                        <img  alt="screenshot" style="float: right; margin: 15px;" src="res/treetask.jpg"/>
                        <p style="text-align:justify;padding-left: 30px;">Tree Task is a nested task and project management utility that sets itself apart from other task manager and to-do list apps because it is not limited to a linear lists of tasks. Instead, Tree Task allows you to create an infinite number of tasks per list, with an infinite depth of sub-tasks. Sub-tasks are "tasks within a task". Any task that contains sub-tasks acts like a folder for more tasks. If you understand how to organize files and folders on a computer, you will understand how Tree Task works! Tree Task will also track your progress by calculating the average completion of all of the sub-tasks and display it in the parent task, giving you a top-level view of how far along you are on a set of tasks or project via a completion percentage and a progress bar.
                        The user interface is both simple, and highly functional. Tasks are marked as finished and unfinished by simply tapping on them. Parent tasks (like folders) are marked finished only if all of their sub-tasks are marked finished. 
                        </p>
                        <p style="text-align:justify; padding-left: 30px; padding-right: 20px;">You can always know where you are in the tree by looking at the path at the top of the task view.
                        Tree Task is simple enough to make grocery lists, but also offers complex features to track the progress of very large projects making it a versatile and a must have utility for anyone who needs to keep track of things.
                        This version of Tree Task does not contain any ads and will receive updates before the free version does.
                        </p>
                        
                        <h3>Fun Fact</h3>
                        <p style="padding-left: 30px;">The Icon is created entirely with HTML and CSS and is included in the app source code</p>
                        <div class="bg">
                            <div class="content1">
                                <div class="bar top">
                                </div>
                                
                                <div class="children">
                                    <div class="arrow1"></div>
                                    <div class="bar child"></div>
                                    <div class="bar child"></div>
                                    <div class="bar child"></div>
                                    <div class="bar child"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                
                <div class="spaceFix"></div>
                <div class="contentBox box-2">
                    <div class="pageTitle">
                    Video
                    </div>
                    <div class="divider">
                    </div>
                    <div class="content">
                        <iframe style="margin-left: 30px;" width="560" height="315" src="//www.youtube.com/embed/eSNNld7jTNY" frameborder="0" allowfullscreen></iframe>
                    </div>

                </div>
                
                <div class="spaceFix"></div>
                <div class="contentBox box-3">
                    <div class="pageTitle">
                        FAQ
                    </div>
                    <div class="divider">
                    </div>
                    <div class="content">

                        <h3 class="question">Q: Is it free?</h3>
                        <p class="answer">
                        A: Yes. It is open source. Meaning both the app and the source code is free to use.
                        </p>
                        
                        <h3 class="question">Q: Why is it $.99 on Google Play if it is free?</h3>
                        <p class="answer">
                        A: The google play version is updated as stable releases are built. You are paying for the regular updates. The full free verison can be found <a href="https://github.com/gh123man/Tree-Task/releases">on the Github releases section</a>
                        </p>
                        
                        <h3 class="question">Q: Can I contribute?</h3>
                        <p class="answer">
                        A: Yes! click the banner on the top right of the page and read the README.md
                        </p>
                        
                    </div>
                </div>
                
                <div class="spaceFix"></div>
                <div class="contentBox box-4">
                    <div class="pageTitle">
                        Downloads
                    </div>
                    <div class="divider">
                    </div>
                    <div class="content">
                        
                        Latest versions avalible for free on the <a href="https://github.com/gh123man/Tree-Task/releases">GitHub releases page</a>
                        <br/>
                        You can grab the ad supported version on <a href="https://play.google.com/store/apps/details?id=com.ghsoft.treetaskfreeapp">Google Play</a>
                        <br/>
                        You can download the $.99 version from <a href="https://play.google.com/store/apps/details?id=com.ghsoft.treetask">Google Play</a>
                    </div>
                </div>
                
                <div class="spaceFix"></div>
                <div class="contentBox box-5">
                    <div class="pageTitle">
                        Developers
                    </div>
                    <div class="divider">
                    </div>
                    <div class="content">
                        
                        You may download an modify the <a href="https://github.com/gh123man/Tree-Task">source code</a> freely under the Apache License, Version 2.0
                        <br/>
                        <pre class="code">
                    Copyright 2013 Brian Floersch (gh123man@gmail.com)

                    Licensed under the Apache License, Version 2.0 (the "License");
                    you may not use this file except in compliance with the License.
                    You may obtain a copy of the License at

                       http://www.apache.org/licenses/LICENSE-2.0

                    Unless required by applicable law or agreed to in writing, software
                    distributed under the License is distributed on an "AS IS" BASIS,
                    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
                    See the License for the specific language governing permissions and
                    limitations under the License.
                        </pre>
                    </div>
                </div>
                
                <div class="spaceFix"></div>
                <div class="contentBox box-6">
                    <div class="pageTitle">
                        Changelog
                    </div>
                    <div class="divider">
                    </div>
                    <div class="content">
                        

                    <h3 class="question">1.4</h3>
                    <ul>
                        <li>task sorting in all views</li>
                        <li>More intuitive way to create trees</li>
                        <li>better scaling</li>
                        <li>fixed description display bugs</li>
                    </ul>

                    <h3 class="question">1.3.1</h3>
                    <ul>
                        <li>New launcher Icon</li>
                        <li>some bug fixes</li>
                    </ul>

                    <h3 class="question">1.3</h3>
                    <ul>
                        <li>Sticky progress bar on task views</li>
                        <li>bug fixes</li>
                        <li>Performance optimizations</li>
                        <li>layout updates</li>
                    </ul>


                    <h3 class="question">1.2</h3>
                    <ul>
                        <li>Now share tasks as text to email, text messages or any other application that supports text intents!</li>
                        <li>some bug fixes</li>
                        <li>icon updates</li>
                        <li>layout updates</li>
                    </ul>

                    <h3 class="question">1.1</h3>
                    <ul>
                        <li>bug fixes</li>
                    </ul>


                    <h3 class="question">1.0</h3>
                    <ul>
                        <li>initial release</li>
                    </ul>

                    </div>
                </div>
                
                <div class="spaceFix"></div>
                <div class="contentBox box-7 lastBox">
                    <div class="pageTitle">
                    About
                    </div>
                    <div class="divider">
                    </div>
                    <div class="content">
                        <p>I built Tree Task because I required a project manager that could handle large projects and notes while maintaining an effective UI. </p>
                        <p>Originaly Tree Task was a web platform. I decided to port it to Android because I felt it would be mroe effective in a mobile environment.
                        </p>
                    </div>

                </div>
                
            </div>
        </div>
    </body> 
</html> 
