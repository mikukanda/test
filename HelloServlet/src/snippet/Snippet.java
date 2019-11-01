package snippet;

public class Snippet {
	public static void main(String[] args) {
		<servlet>
		<servlet-name>Test</servlet-name>
		<servlet-class>TestServlet</servlet-class>
		</servlet>
		<servlet-mapping>
		
		<servlet-name>Test</servlet-name>
		<url-pattern>/HelloServlet/TestServlet</url-pattern>
		</servlet-mapping>
	}
}

