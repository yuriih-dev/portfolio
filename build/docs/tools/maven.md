```dtd
mvn archetype:generate -DgroupId=com.japan -DartifactId=JapanProject -DarchetypeArtifactId=maven-archetype-quickstart
mvn compile
mvn test
mvn package
mvn help:describe -Dcmd=compile

mvn archetype:generate
	-DgroupId={project-packaging}
	-DartifactId={project-name}
	-DarchetypeArtifactId={maven-template}
	-DinteractiveMode=false


<parent>
    <groupId>org.springframework.boot</groupId>
    <artifactId>spring-boot-starter-parent</artifactId>
    <version>1.5.9.RELEASSE</version>
</parent>
<dependencies>
    <dependency>
        <groupId>org.springframework.boot</groupId>
        <artifactId>spring-boot-starter-web</artifactId>
    </dependency>
</dependencies>

https://www.mkyong.com/maven/how-to-create-a-web-application-project-with-maven/
https://www.shortn0tes.com/2018/01/spring-boot-web-app-intellij-idea-community.html

https://www.youtube.com/watch?v=fzeOYDBu0Qw
https://www.youtube.com/watch?v=ZP8Um12Z_mk---
https://www.youtube.com/watch?v=E0cRlFNpiL0
https://www.youtube.com/watch?v=y-f9yh5r968


mvn clearn install
```
