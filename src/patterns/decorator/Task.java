package patterns.decorator;

/**
 * Created by Oleh on 10.11.2017.
 */
public class Task {
    public static void main(String[] args) {
        IMethod method = new HistrogramEqualization(new ImageFiltration(new ImagePreprocMethod()));

        System.out.println(method.applyMethod());
    }
}
