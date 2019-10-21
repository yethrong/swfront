/**
 * 
 */
package demo;
import java.lang.reflect.Field;
import module.Person;
/**
 * @author zhoulizhi
 *
 */
public class HelloWord {
	/** 
	 * @param args
	 * @Test
	 */
	public static void main(String[] args) throws Exception {
		// TODO Auto-generated method stub
		
		Class mo = Person.class;
		Field[] GetField = mo.getFields();
		for(Field field: GetField) {
			System.out.println(field);
		}
		System.out.println();
	}
	
}
