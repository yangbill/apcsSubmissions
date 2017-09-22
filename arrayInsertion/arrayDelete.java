import java.util.*;

public class arrayDelete
{
    public static void main(String[] args)
    {
        System.out.println("Index");
        
        Scanner console = new Scanner(System.in);
        
        int index = console.nextInt();
        console.nextLine();
        
        int[] oldArray = {1, 2, 3, 4};
        int[] newArray = new int[oldArray.length - 1];
        
        int count = 0;
        for(int i = 0; i < oldArray.length; i++)
        {
            if (i != index)
            {
                newArray[count] = oldArray[i];
                count++;
            }
        }
        
        System.out.println("Old Array: " + Arrays.toString(oldArray));
        System.out.println("New Array: " + Arrays.toString(newArray));
    }
}